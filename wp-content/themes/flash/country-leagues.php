<?php
   /* Template Name: Country Leagues */
   get_header(); ?>
<main id="content">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <section>
         <div class="container bg-clr">
            <div class="row">
               <div class="col-md-2">
                  <?php get_sidebar(); ?>
               </div>
               <!-- End Coloum -->
               <div class="col-md-8">
                  <div class="breadcrumb custom-breadcrumb">
                     <ul>
                        <li><a href="#" class="football">Bóng Đá</a></li>
                        <li><img src="https://www.flashscore.vn/res/image/country_flags/world.png"> <a href="#">Pakistan</a></li>
                        <li>Premier League</li>
                        <li>2018/2019</li>
                     </ul>
                  </div>
				   <div class="tournament-name">
					   <ul>
						   <li><img src="https://www.flashscore.vn/bong-da/pakistan/premier-league//res/image/data/z9zFh4ld-dI9guwqt.png"></li>
						   <li><p>Premier League</p></li>
					   </ul>
				   </div>
                  <div class="my-tabs">
                     <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">profile</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#one" role="tab" data-toggle="tab">buzz</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#two" role="tab" data-toggle="tab">buzz</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#three" role="tab" data-toggle="tab">buzz</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#four" role="tab" data-toggle="tab">references</a>
                        </li>
                     </ul>
                     <!-- Tab panes -->
                     <br>
                     <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="profile">
                           <div class="my-tabs">
                              <ul class="nav nav-tabs" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">profile</a>
                                 </li>
                              </ul>
                              <!-- Tab panes -->
                              <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane fade in active show" id="profile">
                                    <div class="tabs-box">
                                       <ul class="tabs-box-list top-box-list tournament-list">
                                          <li class="top-li">
                                             <div class="content-padding">
                                                <span class="flag"><img src="https://www.flashscore.vn/res/image/country_flags/world.png" alt="flag"></span>
                                                <span class="tournament">CHÂU Á: <a href="#">AFC Cup</a></span>
                                                <span class="star"><i class="fa fa-star"></i></span>
                                                <span class="mini">
                                                <span class="first-text"><a href="#">Bảng xếp hạng</a></span>
                                                <span class="down-icon"></span>
                                                </span>
                                             </div>
                                             <ul class="sub-details pl-details">
                                                <li>
                                                   <a href="#">
                                                   <span class="pl-sponser">
                                                   <span class="pl-team">13.01. 16:30</span>
                                                   <span class="pl-player">Al Jaish (Syr)</span>
                                                   </span>
                                                   <span class="pl-sponser">
                                                   <span class="team">SSGC</span>
                                                   <span class="final-points pl-points">4 : 0</span>
                                                   </span>
                                                   </a>
                                                </li>
                                                <li>
                                                   <a href="#">
                                                   <span class="pl-sponser">
                                                   <span class="pl-team">13.01. 16:30</span>
                                                   <span class="pl-player">Al Jaish (Syr)</span>
                                                   </span>
                                                   <span class="pl-sponser">
                                                   <span class="team">SSGC</span>
                                                   <span class="final-points pl-points">4 : 0</span>
                                                   </span>
                                                   </a>
                                                </li>
                                                <li>
                                                   <a href="#">
                                                   <span class="pl-sponser">
                                                   <span class="pl-team">13.01. 16:30</span>
                                                   <span class="pl-player">Al Jaish (Syr)</span>
                                                   </span>
                                                   <span class="pl-sponser">
                                                   <span class="team">SSGC</span>
                                                   <span class="final-points pl-points">4 : 0</span>
                                                   </span>
                                                   </a>
                                                </li>
                                                <li class="ls-more text-center"><span><a href="#">Hiển thị thêm trận đấu</a></span></li>
                                             </ul>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="my-tabs multi-tabs">
                       <ul class="nav nav-tabs" role="tablist">
                         <li class="nav-item">
                           <a class="nav-link active" href="#bang" role="tab" data-toggle="tab">Bảng xếp hạng</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="#phone" role="tab" data-toggle="tab">Phong độ</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="#tai" role="tab" data-toggle="tab">Tài/Xỉu</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="#ht" role="tab" data-toggle="tab">HT/FT</a>
                         </li>
                       </ul>
                       <!-- Tab panes -->
                       
                       <div class="tab-content">
                         <div role="tabpanel" class="tab-pane fade in active show" id="bang">
                             <div class="multi-tab-inner">
                                <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" href="#ton" role="tab" data-toggle="tab">Bảng xếp hạng</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#san" role="tab" data-toggle="tab">Phong độ</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#kha" role="tab" data-toggle="tab">Tài/Xỉu</a>
                                </li>
                              </ul>

                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active show" id="ton">
                                    <table id="table-type-1" class="stats-table stats-main table-1">
  <thead>
    <tr class="main">
      <th class="rank"><a href="#"><span class="txt">#</span></a></th>
      <th class="col_name"><a href="#"><span class="txt">Đội</span></a></th>
      <th><a href="#"><span class="txt">Tr</span></a></th>
      <th><a href="#"><span class="txt">W</span></a></th>
      <th><a href="#"><span class="txt">H</span></a></th>
      <th><a href="#"><span class="txt">L</span></a></th>
      <th><a href="#"><span class="txt">G</span></a></th>
      <th><a href="#"><span class="txt">Đ</span></a></th>
      <th class="form">Phong độ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="q1">1.</td>
      <td class="col_name"><span class="team-logo team-logo-50733" style="background: transparent url(https://www.flashscore.vn/res/image/data/m-jVIQ0uQD-Aq46Cam3.png?new) 0 -192.5px no-repeat;background-size: 15px;"></span><span class="team_name_span" style="display: inline-block;"><a>KRL FC</a></span></td>
      <td>26</td>
      <td>14</td>
      <td>9</td>
      <td>3</td>
      <td>40:12</td>
      <td>51</td>
      <td class="form col_form">
        <div class="matches-5 no-upcoming-match"><a href="" class="form-bg form-w">&nbsp;</a><a href="" class="form-bg form-w">&nbsp;</a><a href="" class="form-bg form-l 3 ">&nbsp;</a><a href="" class="form-bg form-l 3">&nbsp;</a><a href="" class="form-bg form-bg-last form-d">&nbsp;</a></div>
      </td>
    </tr>
    <tr>
      <td>2.</td>
      <td class="col_name"><span class="team-logo team-logo-31793" style="background: transparent url(https://www.flashscore.vn/res/image/data/m-jVIQ0uQD-Aq46Cam3.png?new) 0 -122.5px no-repeat;background-size: 15px;"></span><span class="team_name_span" style="display: inline-block;"><a>Pakistan Air Force</a></span></td>
      <td>26</td>
      <td>14</td>
      <td>9</td>
      <td>3</td>
      <td>40:13</td>
      <td>51</td>
      <td class="form col_form">
        <div class="matches-5 no-upcoming-match"><a href="" class="form-bg form-w ">&nbsp;</a><a href="" class="form-bg form-d">&nbsp;</a><a href="" class="form-bg form-d">&nbsp;</a><a href="" class="form-bg form-w">&nbsp;</a><a href="" class="form-bg form-bg-last form-w">&nbsp;</a></div>
      </td>
    </tr>
    <tr>
      <td class="r1">13.</td>
      <td class="col_name"><span class="team-logo team-logo-28071" style="background: transparent url(https://www.flashscore.vn/res/image/data/m-jVIQ0uQD-Aq46Cam3.png?new) 0 -52.5px no-repeat;background-size: 15px;"></span><span class="team_name_span" style="display: inline-block;"><a>Karachi Port Trust</a></span></td>
      <td>26</td>
      <td>4</td>
      <td>6</td>
      <td>16</td>
      <td>19:46</td>
      <td>18</td>
      <td class="form col_form">
        <div class="matches-5 no-upcoming-match"><a href="" class="form-bg form-d ">&nbsp;</a><a href="" class="form-bg form-l">&nbsp;</a><a href="" class="form-bg form-w">&nbsp;</a><a href="" class="form-bg form-l">&nbsp;</a><a href="" class="form-bg form-bg-last form-l">&nbsp;</a></div>
      </td>
    </tr>
  </tbody>
</table>
                                </div>     
                                <div role="tabpanel" class="tab-pane fade" id="san">Phong độ</div>
                                <div role="tabpanel" class="tab-pane fade" id="kha">Tài/Xỉu</div>
                              </div>
                             </div>
                         </div>     
                         <div role="tabpanel" class="tab-pane fade" id="phone">Phong độ</div>
                         <div role="tabpanel" class="tab-pane fade" id="tai">Tài/Xỉu</div>
                         <div role="tabpanel" class="tab-pane fade" id="ht">HT/FT</div>
                       </div>
                  </div>
               </div>
               <!-- End Coloum -->
            </div>
            <!-- End Row -->
         </div>
         <!-- End Container -->
      </section>
      <!-- End Section -->
      <div class="entry-content">
         <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
         <?php the_content(); ?>
      </div>
   </article>
   <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>