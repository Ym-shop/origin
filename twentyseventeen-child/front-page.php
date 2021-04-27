<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
<body id="posts">
	
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		// Show the selected front page content.
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif;
		?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filters the number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here.
		?>


<div class="topmenu">
<div class="container">

<div class="link">
<a href="<?php echo get_permalink( get_page_by_title( '感染対策' )->ID ); ?>">
<i class="fa fa-heartbeat" aria-hidden="true"></i>
<p class=toppage>感染対策</p>
<p class="topsita">換気機能付きのエアコンの設置､関係者･スタッフ等の感染予防対策を徹底しております｡また､
お客様ご来店時にアルコール消毒のご協力をお願いしております｡</p>
</a>
</div>

<div class="link">
<a href="<?php echo get_permalink( get_page_by_title( 'バリアフリーの徹底' )->ID ); ?>">
<i class="fa fa-wheelchair" aria-hidden="true"></i>
<p class=toppage>バリアフリーの徹底</p>
<p class="topsita">バリアフリーの徹底として、機能性、安全性、快適さ、デザインを追求し、ご来店されたお客様に安心かつ快適な空間を提供しています。</p>
</a>
</div>

<div class="link">
<a href="<?php echo get_permalink( get_page_by_title( '質問等' )->ID ); ?>">
<i class="fa fa-quora" aria-hidden="true"></i>
<p class=toppage>質問等</p>
<p class="topsita">ご不明な点やリクエスト等がございましたら､<br>
電話番号000-0000-0000または､お問い合わせにご記入をお願いいたします｡</p>
</a>
</div>

<div class="borogu">
<p class="itiran">ブログ一覧</p>

<article>
<a id="iro" href="http://miura_yuudai.org/wordpress/?p=227">
<h1 class="tokotop">臨時営業のお知らせ</h1>
<p class="bun">4月26日に臨時営業をいたします｡また､それに伴い､翌月4月27日を休業日とさせていただきます｡</p>
</a>
</article>

<article>
<a id="iro" href="http://miura_yuudai.org/wordpress/?p=102">
<h1 class="tokotop">イベントを開催いたします</h1>
<p class="bun">〇〇月〇〇日に本店舗にてイベントを開催いたします｡</p>
</a>
</article>

<article>
<a id="iro" href="http://miura_yuudai.org/wordpress/?p=44">
<h1 class="tokotop">グッズ販売を始めました</h1>
<p class="bun">本店舗にてグッズの販売を本日から始めさせていただきました｡</p>
</a>
</article>
</div>

</div>
</div>

<aside class="widget-area" role="complementary" aria-label="フッター">
				<h2 class="widget-title-01">営業日カレンダー</h2>
					<div class="widget-column footer-widget-1">
				<section id="bizcalendar-2" class="widget widget_bizcalendar">
				<div id="biz_calendar">
				<table class="bizcal"><tbody><tr><td class="calmonth" colspan="4">2021年 4月</td><td class="calbtn down-img" onclick="bizCalendar.downMonth()" title="前の月へ"><img src="http://miura_yuudai.org/wordpress/wp-content/plugins/biz-calendar/image/down.png"></td><td class="calbtn today-img" onclick="bizCalendar.goToday()" title="今月へ"><img src="http://miura_yuudai.org/wordpress/wp-content/plugins/biz-calendar/image/today.png"></td><td class="calbtn up-img" onclick="bizCalendar.upMonth()" title="次の月へ"><img src="http://miura_yuudai.org/wordpress/wp-content/plugins/biz-calendar/image/up.png"></td></tr><tr><th>日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th></tr><tr><td></td><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td></tr><tr><td>4</td><td class="holiday">5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr><tr><td>11</td><td class="holiday">12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td></tr><tr><td>18</td><td class="holiday">19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td></tr><tr><td>25</td><td class="holiday today">26</td><td>27</td><td>28</td><td>29</td><td>30</td><td></td></tr></tbody></table><p><span class="boxholiday"></span>定休日</p><p><span class="boxeventday"></span>イベント開催日</p></div></section>			</div>
				</aside>

	</main><!-- #main -->
</div><!-- #primary -->
</body>
<?php
get_footer();




