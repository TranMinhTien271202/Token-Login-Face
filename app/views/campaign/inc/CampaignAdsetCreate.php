<div class="mt-15">
    <div class="d-flex justify-content-center">
        <div class="col-3 input-effect">
            <input class="form-control" name="name" id="name" type="text" placeholder="">
            <label>Tên nhóm quảng cáo( bắt buộc )</label>
            <span class="focus-border"></span>
        </div>
        <div class="col-3 input-effect">
            <input class="form-control" name="daily_budget" id="daily_budget" type="text" placeholder="">
            <label>Ngân sách hàng ngày( bắt buộc )</label>
            <span class="focus-border"></span>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-3 input-effect">
            <select name="status" id="status" class="form-control form-select">
                <option value="ACTIVE">Hoạt động</option>
                <option value="PAUSED">Tạm dừng</option>
            </select>
            <label>Cách tính phí</label>
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
            <label>Mục tiêu hiệu quả</label>
            <span class="focus-border"></span>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-3 input-effect">
            <select name="campaign" id="campaign" class="form-control form-select">
                <option value="select_campaign"></option>
            </select>
            <label>Chiến dịch</label>
            <span class="focus-border"></span>
        </div>
        <div class="col-3 input-effect">
            <select name="campaign" id="campaign" class="form-control form-select">
                <option value="select_campaign"></option>
            </select>
            <label>Độ tuổi</label>
            <span class="focus-border"></span>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-3 input-effect">
            <input class="form-control has-date" name="name" id="name" type="datetime-local" placeholder="">
            <label>Ngày bắt đầu</label>
            <span class="focus-border"></span>
        </div>
        <div class="col-3 input-effect">
            <input class="form-control has-date" name="name" id="name" type="datetime-local" placeholder="">
            <label>Ngày kết thúc</label>
            <span class="focus-border"></span>
        </div>
    </div>
    <div>
        <div class="col-3 input-effect">
            <select name="status" id="status" class="form-control form-select">
                <option value="ACTIVE">Hoạt động</option>
                <option value="PAUSED">Tạm dừng</option>
            </select>
            <label>Trạng thái</label>
            <span class="focus-border"></span>
        </div>
    </div>
    <div class="m-0-20 text-right">
        <button class="btn-create" onclick="createCampaign(event)">Tạo mới</button>
    </div>
</div>