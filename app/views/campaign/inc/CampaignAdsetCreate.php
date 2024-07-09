<div class="mt-15">
    <div class="d-flex justify-content-center">
        <div class="col-3 input-effect">
            <input class="form-control" name="name" id="name" type="text" placeholder="">
            <label>Tên nhóm quảng cáo( bắt buộc )</label>
            <span class="focus-border"></span>
        </div>
        <div class="col-3 input-effect">
            <select name="billing_event" id="billing_event" class="form-control form-select">
                <option value="APP_INSTALLS">Thanh toán khi người dùng cái đặt ứng dụng</option>
                <option value="CLICKS">Thanh toán khi người dùng nhấp vào quảng cáo.</option>
                <option value="IMPRESSIONS">Thanh toán theo số lần hiển thị.</option>
                <option value="LINK_CLICKS">Thanh toán khi nhấp vào liên kết quảng cáo.</option>
                <option value="OFFER_CLAIMS">Thanh toán khi yêu cầu ưu đãi.</option>
                <option value="PAGE_LIKES">Thanh toán khi mọi người thích trang của bạn.</option>
                <option value="POST_ENGAGEMENT">Thanh toán khi mọi người tương tác với bài đăng của bạn.</option>
                <option value="VIDEO_VIEWS">Thanh toán khi mọi người xem video quảng cáo của bạn ít nhất 10 giây.</option>
                <option value="THRUPLAY">Trả tiền cho những quảng cáo được phát hết hoặc ít nhất 15 giây.</option>
            </select>
            <label>Cách tính phí</label>
            <span class="focus-border"></span>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-3 input-effect">
            <select name="budget" id="budget" class="form-control form-select">
                <option value="LIFT_TIME">Ngân sách hàng ngày</option>
                <option value="DAILY">Ngân sách trọn đời</option>
            </select>
            <label>Loại ngân sách</label>
            <span class="focus-border"></span>
        </div>
        <div class="col-3 input-effect" id="daily-budget-input">
            <input class="form-control" name="daily_budget" id="daily_budget" type="text" placeholder="">
            <label>Ngân sách trọn đời( bắt buộc )</label>
            <span class="focus-border"></span>
        </div>
        <div class="col-3 input-effect" id="lifetime-budget-input">
            <input class="form-control" name="lift_time_budget" id="lift_time_budget" type="text" placeholder="">
            <label>Ngân sách hàng ngày( bắt buộc )</label>
            <span class="focus-border"></span>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-3 input-effect">
            <select name="gender" id="gender" class="form-control form-select">
                <option value="0">Tất cả</option>
                <option value="1">Nam</option>
                <option value="1">Nữ</option>
            </select>
            <label>Giới tính</label>
            <span class="focus-border"></span>
        </div>
        <div class="col-3 input-effect">
            <select name="optimization_goal" id="optimization_goal" class="form-control form-select">
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
            <select name="min_age" id="min_age" class="form-control form-select has-date">
            </select>
            <label>Độ tuổi bắt đầu</label>
            <span class="focus-border"></span>
        </div>
        <div class="col-3 input-effect">
            <select name="max_age" id="max_age" class="form-control form-select has-date">
            </select>
            <label>Độ tuổi kết thúc</label>
            <span class="focus-border"></span>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-3 input-effect">
            <input class="form-control has-date" name="start_time" id="start_time" type="datetime-local" placeholder="">
            <label>Thời gian bắt đầu</label>
            <span class="focus-border"></span>
        </div>
        <div class="col-3 input-effect">
            <input class="form-control has-date" name="end_time" id="end_time" type="datetime-local" placeholder="">
            <label>Thời gian kết thúc</label>
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
            <select name="campaign" id="campaign" class="form-control form-select">
                <option value="select_campaign"></option>
            </select>
            <label>Chiến dịch</label>
            <span class="focus-border"></span>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-3 input-effect">
            <input class="form-control" name="bid_amount" id="bid_amount" type="text" placeholder="">
            <label>Giới hạn giá trị( bắt buộc )</label>
            <span class="focus-border"></span>
        </div>
    </div>
    <div class="m-0-20 text-right">
        <button class="btn-create" onclick="createCampaignAdset(event)">Tạo mới</button>
    </div>
</div>