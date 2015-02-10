<?php get_header(); ?>
			<section id="listaArtykulow">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<article>
					<?php
						if(is_single()){
							 setPostViews(get_the_ID());
						}
					?>
						<header>
							<a href="<?php the_permalink(); ?>">
								<?php 
									if ( has_post_thumbnail() ) { 
										the_post_thumbnail( 'duzy_waski_kwadrat' ); 
									} 
								?>
							</a>
							<div class="metaIkonki">
									<?php $czas = get_post_custom_values('czas');
									if($czas != null){ ?>
										<div class="mataCzas metaIkonka">
											<?php echo $czas[0]; ?>
										</div>
									<?php } ?>
									<?php $trudnosc = get_post_custom_values('trudnosc');
									if($trudnosc != null){ ?>
										<div class="mataTrudnosc metaIkonka">
											<?php echo $trudnosc[0]; ?>
										</div>
									<?php } ?>
									<?php $cena = get_post_custom_values('cena');
									if($cena != null){ ?>
										<div class="mataKoszt metaIkonka">
											<?php echo $cena[0]; ?>
										</div>
									<?php } ?>
							</div>
							<div class="clear"></div>
							<p class="metaInformacje"><?php the_time('j F Y') ?> <?php the_category(' ') ?></p>
							<h1 class="tytul_artykulu"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							
						</header>
						<?php the_content(); ?>
						<?php if(is_single()){ ?>
							<section>
								<?php comments_template(); ?>
							</section>
						<?php } ?>
				</article>
				<?php endwhile; ?>
				<div class="navigation">
					<p><?php posts_nav_link('','Następne wpisy &raquo;','&laquo; Poprzednie wpisy') ?></p>
				</div>
				<?php else : ?>
				<h2 class="center">Nie znaleziono</h2>
				<p class="center"><?php _e("Niestety, nie znaleziono żądanych postów."); ?></p>
				<?php endif; ?>
				
			</section>
			<aside id="panelBoczny">
				<form id="wyszukiwarka" action="/" method="get">
					<input type="text" placeholder="wyszukaj" name="s">
				</form>
				<h3>O blogu i o mnie</h3>
				<p>Nazywam się Marysia i bardzo lubię jeść. Od kilku lat lubię też gotować. Okazało się, że inni lubią z kolei jeść to, co ugotowałam. I o tym jest ten blog.</p>
				<p>Piszę o Japonii - moim ulubionym kraju z najlepszym i najzdrowszym jedzeniem na świecie. O słodyczach, bo one wychodzą mi chyba najlepiej. O czasie, którego często brakuje w kuchni, ale dzięki temu wpadają do głowy świetne pomysły i niebanalne rozwiązania.</p>
				<div style="margin: 10px 0">
					<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FMarycooking%2F505289669601424&amp;width=300&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=102993303143183" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:290px;" allowTransparency="true"></iframe>
				</div>
				<div style="margin: 10px 0">
					<!-- www.intagme.com -->
					<iframe src="http://www.intagme.com/in/?u=bWFyeWNvb2tpbmcucGx8c2x8MzAwfDJ8M3x8eWVzfDV8dW5kZWZpbmVkfHllcw==" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:315px; height: 315px" ></iframe>
				</div>
				<h3>Najpopularniejsze przepisy</h3>
				<ul id="najpopularniejszePrzepisy">
					<?php
					$args = array( 'posts_per_page' => 5, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num');
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<?php 
									if ( has_post_thumbnail() ) { 
										the_post_thumbnail( 'maly_waski_kwadrat' ); 
									} 
								?>
								<?php the_title(); ?></a>
						</li>
					<?php endforeach; 
					wp_reset_postdata();?>
				</ul>
				<a href="http://durszlak.pl/" title="Durszlak.pl - polskie blogi kulinarne" style="margin-top: 30px; text-align:center; display:block">
					<img src="http://durszlak.pl/images/buttons/120x90-white.png?8XaOeyVzsHklXvDIlYd9Kwzz" alt="przepisy kulinarne" width="120" height="90" />
				</a>
				<a href="http://zmiksowani.pl" title="Mikser Kulinarny - przepisy kulinarne i wyszukiwarka przepisów" target="_blank" style="margin-top: 30px; text-align:center; display:block">
					<img src="http://static.zmiksowani.pl/button/?src=banner-nowy-120x90-light.png&hash=6f6d7ea73f8b34354a3ecc69f872abfd" width="120" height="90" border="0" alt="Mikser Kulinarny - przepisy kulinarne i wyszukiwarka przepisów"/>
				</a>
			</aside>
		
<?php get_footer(); ?>