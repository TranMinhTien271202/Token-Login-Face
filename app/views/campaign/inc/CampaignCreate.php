<div class="mt-5">
    <div class="flex gap-5">
        <div class="form-control flex-1">
            <label class="text-base font-normal">Tên chiến dịch</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tên chiến dịch" required />
        </div>
        <div class="form-control flex-1">
            <label class="text-base font-normal">Cách mua</label>
            <select id="purchase_method" name="purchase_method" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="AUCTION">Đấu giá</option>
                <option value="FIXED_COST">Đặt trước</option>
            </select>
        </div>
    </div>
    <div class="flex gap-5">
        <div class="form-control flex-1">
            <label class="text-base font-normal">Trạng thái</label>
            <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="ACTIVE">Hoạt động</option>
                <option value="PAUSED">Tạm dừng</option>
            </select>
        </div>
        <div class="form-control flex-1">
            <label class="text-base font-normal">Mục tiêu chiến dịch</label>
            <select id="objective" name="objective" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="OUTCOME_AWARENESS">Mức độ nhận biết</option>
                <option value="OUTCOME_TRAFFIC">Lưu lượng truy cập</option>
                <option value="OUTCOME_ENGAGEMENT">Lượt tương tác</option>
                <option value="OUTCOME_APP_PROMOTION">Quảng cáo ứng dụng</option>
                <option value="OUTCOME_LEADS">Khách Hàng Tiềm Năng</option>
                <option value="OUTCOME_SALES">Doanh Số</option>
            </select>
        </div>
    </div>
    <div class="flex gap-5">
        <div class="form-control w-1/2 flex-1">
            <label class="text-base font-normal">Trạng thái</label>
            <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="ACTIVE">Hoạt động</option>
                <option value="PAUSED">Tạm dừng</option>
            </select>
        </div>
    </div>
</div>
<div class="mt-3 text-right">
    <button type="submit" onclick="onSubmit(event)" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tạo mới</button>
</div>
<script>
    function onSubmit(event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const purchaseMethod = document.getElementById('purchase_method').value;
        const status = document.getElementById('status').value;
        const objective = document.getElementById('objective').value;
        const data = {
            name,
            purchase_method: purchaseMethod,
            status,
            objective,
        };
        fetch('https://campaign.local/campaigns/create', {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: "POST",
                body: JSON.stringify({
                    data: data
                })
            })
            .then(function(res) {
                if (res.status == 200) {
                    alert('Thêm thành công');
                }
            })
            .catch(function(res) {
                alert('Có lỗi xảy ra');
            })
    }
</script>