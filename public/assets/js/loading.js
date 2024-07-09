// app.js

document.addEventListener("DOMContentLoaded", function () {
  document.documentElement.style.backgroundColor = "rgb(16 74 162)";
  const container = document.getElementById("is-loading");
  const navMain = document.getElementById("nav-main");
  container ? container.classList.remove("d-hidden") : "";
  navMain ? navMain.classList.add("d-hidden") : "";
  let activeRequests = 0;
  const allRequestsFinished = new Promise((resolve) => {
    axios.interceptors.request.use(
      (config) => {
        activeRequests++;
        return config;
      },
      (error) => {
        activeRequests++;
        return Promise.reject(error);
      }
    );
    axios.interceptors.response.use(
      (response) => {
        activeRequests--;
        if (activeRequests === 0) {
          resolve();
        }
        return response;
      },
      (error) => {
        activeRequests--;
        if (activeRequests === 0) {
          resolve();
        }
        return Promise.reject(error);
      }
    );
  });
  Promise.all([
    allRequestsFinished,
    new Promise((resolve) => setTimeout(resolve, 1000)), // Đợi ít nhất 1 giây
  ]).then(() => {
    if (container) container.classList.add("d-hidden");
    if (navMain) navMain.classList.remove("d-hidden");
    document.documentElement.style.backgroundColor = "";
  });
  window.addEventListener("load", () => {
    setTimeout(() => {
      if (activeRequests === 0) {
        if (container) container.classList.add("d-hidden"); // Ẩn container
        if (navMain) navMain.classList.remove("d-hidden"); // Hiển thị nav-main
        document.documentElement.style.backgroundColor = ""; // Xóa màu nền đen
      }
    }, 1000);
  });
});
