<?php include_once __DIR__ . "/../Layouts/Header.php"; ?>
<div class="main">
  <div class="flex-1 p-3 mt-2 text-2xl font-bold">
    <div class="d-flex gap-3">
      <a class="w-full btn-steps text-center <?php echo $key == 'campaign' ? 'steps-active' : '' ?> w-full btn-tab" href="/campaigns">
        Chiến dịch
      </a>
      <a class="w-full btn-steps text-center <?php echo $key == 'adset' ? 'steps-active' : '' ?> w-full btn-tab" href="/campaigns/adsets">
        Nhóm quảng cáo
      </a>
      <a class="w-full btn-steps text-center <?php echo $key == 'ads' ? 'steps-active' : '' ?> w-full btn-tab" href="/campaigns/ads">
        Quảng cáo
      </a>
    </div>
    <?php if ($key == 'campaign') : ?>
      <?php include_once "inc/CampaignCreate.php" ?>
    <?php endif ?>
    <?php if ($key == 'adset') : ?>
      <?php include_once "inc/CampaignAdsetCreate.php" ?>
    <?php endif ?>
    <?php if ($key == 'ads') : ?>
      <?php include_once "inc/CampaignCreate.php" ?>
    <?php endif ?>
  </div>
</div>
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