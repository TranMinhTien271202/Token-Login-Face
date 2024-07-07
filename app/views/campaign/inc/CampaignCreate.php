<div class="mt-15">
    <div class="d-flex justify-content-center">
        <div class="col-3 input-effect">
            <input class="form-control" name="name" id="name" type="text" placeholder="">
            <label>Tên chiến dịch( bắt buộc )</label>
            <span class="focus-border"></span>
        </div>
        <div class="col-3 input-effect">
            <select name="purchase_method" id="purchase_method" class="form-control form-select">
                <option value="AUCTION">Đấu giá</option>
                <option value="FIXED_COST">Đặt trước</option>
            </select>
            <label>Cách mua</label>
            <span class="focus-border"></span>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-3 input-effect">
            <select name="status" id="status" class="form-control form-select">
                <option value="ACTIVE">Hoạt động</option>
                <option value="PAUSED">Tạm dừng</option>
            </select>
            <label>Trạng thái</label>
            <span class="focus-border"></span>
        </div>
        <div class="col-3 input-effect">
            <select name="objective" id="objective" class="form-control form-select">
                <option value="OUTCOME_AWARENESS">Mức độ nhận biết</option>
                <option value="OUTCOME_TRAFFIC">Lưu lượng truy cập</option>
                <option value="OUTCOME_ENGAGEMENT">Lượt tương tác</option>
                <option value="OUTCOME_APP_PROMOTION">Quảng cáo ứng dụng</option>
                <option value="OUTCOME_LEADS">Khách Hàng Tiềm Năng</option>
                <option value="OUTCOME_SALES">Doanh Số</option>
            </select>
            <label>Mục tiêu chiến dịch</label>
            <span class="focus-border"></span>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-3 input-effect">
            <select name="type-ads" id="type-ads" class="form-control form-select">
                <option value="HOUSING">Nhà ở</option>
                <option value="EMPLOYMENT">Việc làm</option>
                <option value="CREDIT">Tín dụng</option>
            </select>
            <label>Loại quảng cáo</label>
            <span class="focus-border"></span>
        </div>
    </div>
    <div class="m-0-20 text-right">
        <button class="btn-create" onclick="createCampaign(event)">Tạo mới</button>
    </div>
</div>