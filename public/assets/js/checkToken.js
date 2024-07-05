// Hàm kiểm tra token hợp lệ sử dụng async/await
const getCookie = (name) => {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
    return null;  // Trả về null nếu cookie không tồn tại
};
TOKEN_CAMPAGIN = getCookie('token_campaign');
async function checkToken() {
    if (!TOKEN_CAMPAGIN) {
      return false; // Trả về giá trị `false` nếu token không có
    }
    try {
      // Gửi yêu cầu đến Facebook Graph API để kiểm tra token
      const response = await fetch(`https://graph.facebook.com/me?access_token=${TOKEN_CAMPAGIN}`);
      if (response.ok) {
        return true; // Trả về giá trị `true` khi mã trạng thái HTTP là 200
      } else {
        return false; // Trả về giá trị `false` nếu mã trạng thái HTTP không phải là 200
      }
    } catch (error) {
      return false; // Trả về giá trị `false` khi có lỗi xảy ra
    }
  }
  
  