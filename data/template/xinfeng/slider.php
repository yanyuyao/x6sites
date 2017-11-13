<!-- Main Slider -->
		<div class="rev_slider_wrapper">
		 	<div id="main-slider" class="rev_slider"  data-version="5.0">
		 		<ul>		
				<?php $tmpData = x6cms_slide(5);?>
				<?php foreach($tmpData as $item):?>

		 			<!-- Slide 1 -->
		   			<li data-transition="fadefromleft"
		   			data-masterspeed="900">
		   			
						<!-- Main Image  -->
						<img src="<?=$item['thumb']?>"  alt="" class="img-resposive" alt="<?=$item['title']?>">
						
						<!-- Layer 1 -->
						<div class="tp-caption slider-line white"
							id="slide-02-layer-01"
				        	data-x="left" data-hoffset="80" 
				        	data-y="top" data-voffset="310"
				        	data-width="['none']"
							data-height="['none']" 
				        	data-transform_idle="o:1;"
 							data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 						
				       		data-start="500">
				       	</div>	<!-- This is the green line-->

						<!-- Layer 2 -->
						<div class="tp-caption big-caption white-caption tp-resizeme"
							id="slide-02-layer-02"
				       		data-x="left" data-hoffset="80" 
				        	data-y="top" data-voffset="340"
				        	data-width="['none']"
							data-height="['none']"  
				        	data-transform_idle="o:1;"
 							data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
				        	data-start="700"
				        	data-responsive_offset="on" style="color:#000;"><?=$item['title']?>
				        </div>

						<!-- Layer 3-->
						<div class="tp-caption small-caption white-caption tp-resizeme"
							id="slide-02-layer-02"
				       		data-x="left" data-hoffset="80" 
				        	data-y="top" data-voffset="490"
				        	data-width="['none']"
							data-height="['none']"  
				        	data-transform_idle="o:1;"
 							data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
				        	data-start="700"
				        	data-responsive_offset="on"><?=$item['description']?><span></span>
				        </div>


				        <!-- Layer 4 -->
						<!--
				        <div class="tp-caption slider-button white" 
				       		id="slide-02-layer-03"
				       		data-x="left" data-hoffset="80" 
				        	data-y="top" data-voffset="620"
				        	data-width="['none']"
							data-height="['none']"  
							data-transform_idle="o:1;"
 							data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  
				        	data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#"}]'
				        	data-start="900"
				        	data-responsive_offset="on"><a href="<?=$item['url']?>" style="color:#fff;">Learn More</a>
				        </div>
						-->
		   			</li>
				<?php endforeach;?>
				<?php unset($tmpData,$item);?>
		   		</ul>
		   	</div>
		</div>