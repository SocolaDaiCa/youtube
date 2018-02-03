<link rel="stylesheet" href="/css/next.css">
<div class="continue-autoplay">
	<div class="continue pull-left">
		<span>TIẾP THEO</span>
	</div>
	<div class="auto-play pull-right">
		<span>TỰ ĐỘNG PHÁT</span>
		<label for="autoplay" id="labelAutoplay">
			<span class="shadow circle" id="btnAutoplay"></span>
		</label>
		<input type="checkbox" id="autoplay" hidden checked>
	</div>
</div>
<div class="list-video">
	<?php for ($i=0; $i <= 5 ; $i++): ?>
	<div class="video">
		<div class="img-next-video pull-left">
			<img src="/images/video.png" alt="" class="img-video">
			<span class="time-video">10:12</span>
		</div>
		<div class="info-next-video pull-left">
			<div class="name-video">
				<a>[FFQ-TV] Các ông lại chê Illaoi của QTV nữa đi</a>
			</div>
			<div class="channel-video">
				<span>FFQ TV</span>
			</div>
			<div class="views-video">
				<span>48N Lượt xem</span>
			</div>
			<div class="new-video">
				<span>Mới</span>
			</div>
		</div>
	</div>
	<?php endfor ?>
</div>