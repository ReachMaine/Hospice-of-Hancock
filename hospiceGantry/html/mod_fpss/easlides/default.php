<?php
/**
 * @version		$Id: default.php 3411 2013-07-23 15:05:35Z joomlaworks $
 * @package		Frontpage Slideshow
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2013 JoomlaWorks Ltd. All rights reserved.
 * @license		http://www.joomlaworks.net/license
 */
/** lms move slide text from slide to nav button and added class s.t. we could style it.
*/
// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<div id="fpssContainer<?php echo $module->id; ?>" class="fpss-container fpss-template-movies textEffectSlideDown">
	<div class="slides-wrapper">
		<div class="slide-loading"></div>
		<div class="slides">
			<?php foreach($slides as $slide): ?>
			<div class="slide">
				<a<?php echo $slide->target; ?> href="<?php echo $slide->link; ?>" class="slide-link">
					<span style="background:url(<?php echo $slide->mainImage; ?>) no-repeat;">
						<img src="<?php echo $slide->mainImage; ?>" alt="<?php echo $slide->altTitle; ?>" />
					</span>
				</a>
				<?php if($slide->content): ?>
				<div class="slidetext">
					<?php if($slide->params->get('title')): ?>
					<h1><a<?php echo $slide->target; ?> href="<?php echo $slide->link; ?>"><?php echo $slide->title; ?></a></h1>
					<?php endif; ?>

					<?php if($slide->params->get('category') && $slide->category): ?>
					<h2><?php echo $slide->category; ?></h2>
					<?php endif; ?>

					<?php if($slide->params->get('tagline') && $slide->tagline): ?>
					<h3><?php echo $slide->tagline; ?></h3>
					<?php endif; ?>

					<?php if($slide->params->get('author') && $slide->author): ?>
					<h4><?php echo JText::_('FPSS_MOD_BY'); ?> <?php echo $slide->author; ?></h4>
					<?php endif; ?>

					<?php if($slide->params->get('readmore') && $slide->link): ?>
					<a<?php echo $slide->target; ?> href="<?php echo $slide->link; ?>" class="fpssReadMore" title="<?php echo JText::_('FPSS_MOD_READ_MORE_ABOUT'); ?> <?php echo $slide->altTitle; ?>"><?php echo JText::_('FPSS_MORE'); ?></a>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="navigation-wrapper"<?php if($params->get('hideNavigation')): ?> style="display:none;"<?php endif; ?>>
		<div class="navigation-background"></div>
		<ul class="navigation">
			<?php foreach($slides as $key => $slide): ?>
			<li class="navigation-button">
				<a class="navigation-a" href="<?php echo $slide->link; ?>" title="<?php echo $slide->altTitle; ?>">
					<span class="navigation-thumbnail" style="background:url(<?php echo $slide->thumbnailImage; ?>) no-repeat;">&nbsp;</span>
					<span class="navigation-info">
						<?php if($slide->params->get('title')): ?>
						<span class="navigation-title"><?php echo $slide->title; ?></span>
						<?php endif; ?>
						<?php if($slide->params->get('tagline') && $slide->tagline): ?>
						<span class="navigation-tagline"><?php echo $slide->tagline; ?></span>
						<?php endif; ?>
						<?php if($slide->params->get('text') && $slide->text): ?>
							<p class="navigation-text"><?php echo $slide->text; ?></p>
						<?php endif; ?>
					</span>
					<span class="fpss-clr">&nbsp;</span>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="fpssTimerContainer">
		<div class="fpssTimer"></div>
	</div>
</div>
