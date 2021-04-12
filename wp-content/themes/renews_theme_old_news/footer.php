</article>
</div>
<!-- /.conatiner -->
</main>

<footer>
	<div class="inner_footer">
		<div class="logo_footer">
			<a href="<?php echo network_home_url(); ?>">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="109px" height="26px" viewBox="0 0 109 26" version="1.1" >
					<title>logo RENEWS</title>
					<g
						 id="symbols"
						 stroke="none"
						 stroke-width="1"
						 fill="none"
						 fill-rule="evenodd"
						 >
						<g transform="translate(-140.000000, -8.000000)" fill="#2C76A4">
							<g transform="translate(140.000000, 0.000000)">
								<g transform="translate(0.000000, 8.000000)">
									<path
												d="M103.3902,20.1055 C101.4172,20.1055 99.3762,19.2835 97.7912,17.8495 L97.6062,17.6815 L98.9502,16.1985 L99.1352,16.3665 C100.3502,17.4665 101.9012,18.0975 103.3892,18.0975 C103.9852,18.0975 104.5362,17.9935 104.9832,17.7945 C105.7522,17.4525 106.1432,16.9005 106.1432,16.1545 C106.1432,14.8445 105.1452,14.4485 102.8682,13.8555 C100.9232,13.3505 98.2602,12.6585 98.2602,9.8425 C98.2602,8.3165 99.0782,7.0615 100.5022,6.3995 C101.2062,6.0715 102.0412,5.8985 102.9142,5.8985 C104.6342,5.8985 106.3752,6.5345 107.6932,7.6425 L107.8842,7.8035 L106.5972,9.3345 L106.4062,9.1735 C105.4462,8.3655 104.1792,7.9025 102.9332,7.9025 C102.3312,7.9025 101.7832,8.0095 101.3462,8.2125 C100.6162,8.5515 100.2602,9.0845 100.2602,9.8425 C100.2602,10.9265 101.0362,11.3125 103.3692,11.9185 C105.3842,12.4435 108.1432,13.1605 108.1432,16.1545 C108.1432,17.6955 107.2862,18.9595 105.7932,19.6235 C105.0702,19.9435 104.2612,20.1055 103.3902,20.1055"
												id="Fill-8"
												/>
									<polygon
													 id="Fill-6"
													 points="89.6275 20 86.1435 9.412 82.6635 20 80.7485 20 76.1435 6 78.2225 6 81.7055 16.588 85.1855 6 87.1005 6 90.5835 16.588 94.0635 6 96.1435 6 91.5425 20"
													 />
									<polygon
													 id="Fill-1"
													 points="58 12 58 25.9996 74.999 25.9996 74.999 24.0006 60 24.0006 60 19.9996 74.999 19.9996 74.999 17.9996 60 18 60 14.0006 74.999 14.0006 74.999 12"
													 />
									<polygon
													 id="Fill-3"
													 points="52.9277 20 43.9997 9.164 43.9997 20 41.9997 20 41.9997 6 44.0727 6 52.9997 16.836 52.9997 6 54.9997 6 54.9997 20"
													 />
									<polygon
													 id="Fill-2"
													 points="21.9996 -0.0001 21.9996 13.9999 38.9996 13.9999 38.9996 11.9999 24.0006 11.9999 24.0006 7.9999 38.9996 7.9999 38.9996 5.9999 24.0006 5.9999 24.0006 1.9999 38.9996 1.9999 38.9996 -0.0001"
													 />
									<path
												d="M12,12 C14.757,12 17,9.757 17,7 C17,4.243 14.757,2 12,2 L2,2 L2,12 L12,12 Z M16.728,20 L12.059,13.997 L2,14 L2,20 L0,20 L0,0 L12,0 C15.859,0 19,3.141 19,7 C19,9.972 17.081,12.639 14.291,13.609 L19.261,20 L16.728,20 Z"
												id="Fill-4"
												/>
								</g>
							</g>
						</g>
					</g>
				</svg>
			</a>
		</div>
		<!-- /.logo_footer -->

		<div class="wrap_sitemap flex">
			<div class="sitemap flex">
				<li class="item_sitemap">
					<a href="<?php echo network_home_url(); ?>info/" class="target_sitemap">
						お知らせ
					</a>
				</li>
				<li class="item_sitemap">
					<a href="<?php echo network_home_url(); ?>register/" class="target_sitemap">
						メンバー登録
					</a>
				</li>
				<li class="item_sitemap">
					<a href="<?php echo network_home_url(); ?>info/policy/" class="target_sitemap">
						プライバシーポリシー
					</a>
				</li>
				<li class="item_sitemap">
					<a href="<?php echo network_home_url(); ?>info/terms/" class="target_sitemap">
						利用規約
					</a>
				</li>
				<li class="item_sitemap">
					<a href="<?php echo network_home_url(); ?>info/contact/" class="target_sitemap">
						情報提供／お問い合わせ
					</a>
				</li>
				<li class="item_sitemap">
					<a href="<?php echo network_home_url(); ?>company/" class="target_sitemap">
						企業概要
					</a>
				</li>
			</div>
		</div>
		<!-- /.wrap_sitemap -->

		<div class="footer_bottom flex">
			<ul class="social flex">
				<?php 
				//元となるテキスト
				$text = 'RENEWS | ';
				$siteURL = rawurlencode(home_url());
				//URLエンコード処理
				$encoded = rawurlencode( $text ) ;
				?>

				<div class="share-btn twitter">
					<a href="//twitter.com/share?url=<?php echo home_url(); ?>&text=<?php echo $encoded; ?>" class="share_popup" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/twitter.svg" alt="twitter" />
					</a>
				</div>
				<div class="share-btn facebook">
					<a href="//www.facebook.com/sharer/sharer.php?u=<?php echo $siteURL; ?>" class="share_popup" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/fb.svg" alt="facebook" />
					</a>
				</div>
				<div class="share-btn line">
					<a href="//social-plugins.line.me/lineit/share?url=<?php echo $siteURL; ?>" class="share_popup" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/line.svg" alt="line" />
					</a>
				</div>
				<div class="share-btn hatena">
					<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $siteURL; ?>&title=<?php echo $encoded; ?>" class="share_popup" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/hatena.svg" alt="hatena" />
					</a>
				</div>
			</ul>

			<p class="text_copyright">
				&copy; Renews inc. 2020
			</p>
		</div>
	</div>

</footer>

</div>
<!-- /.wrapper -->



<?php if(is_home() || is_front_page()): ?>
<!-- ローディング画面 -->
<div id="loaderWrap">
	<div id="loader-bg">
		<div class="inner_loader">
			<div id="loader">
				<div class="spinner">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="109px" height="26px" viewBox="0 0 109 26" version="1.1">
						<title>logo RENEWS</title>
						<g id="symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g transform="translate(-140.000000, -8.000000)" fill="#2C76A4">
								<g transform="translate(140.000000, 0.000000)">
									<g transform="translate(0.000000, 8.000000)">
										<path d="M103.3902,20.1055 C101.4172,20.1055 99.3762,19.2835 97.7912,17.8495 L97.6062,17.6815 L98.9502,16.1985 L99.1352,16.3665 C100.3502,17.4665 101.9012,18.0975 103.3892,18.0975 C103.9852,18.0975 104.5362,17.9935 104.9832,17.7945 C105.7522,17.4525 106.1432,16.9005 106.1432,16.1545 C106.1432,14.8445 105.1452,14.4485 102.8682,13.8555 C100.9232,13.3505 98.2602,12.6585 98.2602,9.8425 C98.2602,8.3165 99.0782,7.0615 100.5022,6.3995 C101.2062,6.0715 102.0412,5.8985 102.9142,5.8985 C104.6342,5.8985 106.3752,6.5345 107.6932,7.6425 L107.8842,7.8035 L106.5972,9.3345 L106.4062,9.1735 C105.4462,8.3655 104.1792,7.9025 102.9332,7.9025 C102.3312,7.9025 101.7832,8.0095 101.3462,8.2125 C100.6162,8.5515 100.2602,9.0845 100.2602,9.8425 C100.2602,10.9265 101.0362,11.3125 103.3692,11.9185 C105.3842,12.4435 108.1432,13.1605 108.1432,16.1545 C108.1432,17.6955 107.2862,18.9595 105.7932,19.6235 C105.0702,19.9435 104.2612,20.1055 103.3902,20.1055" id="Fill-8" />
										<polygon id="Fill-6" points="89.6275 20 86.1435 9.412 82.6635 20 80.7485 20 76.1435 6 78.2225 6 81.7055 16.588 85.1855 6 87.1005 6 90.5835 16.588 94.0635 6 96.1435 6 91.5425 20" />
										<polygon id="Fill-1" points="58 12 58 25.9996 74.999 25.9996 74.999 24.0006 60 24.0006 60 19.9996 74.999 19.9996 74.999 17.9996 60 18 60 14.0006 74.999 14.0006 74.999 12" />
										<polygon id="Fill-3" points="52.9277 20 43.9997 9.164 43.9997 20 41.9997 20 41.9997 6 44.0727 6 52.9997 16.836 52.9997 6 54.9997 6 54.9997 20" />
										<polygon id="Fill-2" points="21.9996 -0.0001 21.9996 13.9999 38.9996 13.9999 38.9996 11.9999 24.0006 11.9999 24.0006 7.9999 38.9996 7.9999 38.9996 5.9999 24.0006 5.9999 24.0006 1.9999 38.9996 1.9999 38.9996 -0.0001" />
										<path d="M12,12 C14.757,12 17,9.757 17,7 C17,4.243 14.757,2 12,2 L2,2 L2,12 L12,12 Z M16.728,20 L12.059,13.997 L2,14 L2,20 L0,20 L0,0 L12,0 C15.859,0 19,3.141 19,7 C19,9.972 17.081,12.639 14.291,13.609 L19.261,20 L16.728,20 Z" id="Fill-4" />
									</g>
								</g>
							</g>
						</g>
					</svg>
				</div><!-- /.spinner -->
			</div><!-- /#loader -->
		</div><!-- /.inner_loader -->
	</div><!-- /#loader-bg -->
</div><!-- loaderWrap -->

<?php endif; ?>

	<?php wp_footer(); ?>
</body>
</html>