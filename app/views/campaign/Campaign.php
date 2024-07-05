<?php include_once __DIR__ . "/../Layouts/Header.php"; ?>
<div class="flex-1 p-3 mt-2 text-2xl font-bold">
    <div class="flex gap-3">
      <a class="w-full" href="/campaigns">
        <button class="<?php echo $key == 'campaign' ? 'steps-active' : '' ?> w-full text-black items-step font-medium p-2 text-xl flex-1">Chiến dịch</button>
      </a>
      <a class="w-full" href="/campaigns/adsets">
        <button class="<?php echo $key == 'adset' ? 'steps-active' : '' ?> w-full text-black items-step font-medium p-2 text-xl flex-1">Nhóm quảng cáo</button>
      </a>
      <a class="w-full" href="/campaigns/ads">
        <button class="<?php echo $key == 'ads' ? 'steps-active' : '' ?> w-full text-black items-step font-medium p-2 text-xl flex-1">Quảng cáo</button>
      </a>
    </div>
    <?php if ($key == 'campaign'): ?>
      <?php include_once "inc/CampaignCreate.php" ?>
    <?php endif ?>
  <!-- <button id="login-facebook" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Đăng nhập facebook</button> -->
</div>
</div>
</body>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    if (window.location.hash && window.location.hash === '#_=_') {
      window.history.replaceState("", document.title, window.location.pathname + window.location.search);
    }
  });
</script>