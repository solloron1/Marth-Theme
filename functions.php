<?php

/*
	Custom theme functions

	Note: we recommend you prefix all your functions to avoid any naming
	collisions or wrap your functions with if function_exists braces.
*/
function marth_numeral($number) {
	$test = abs($number) % 10;
	$ext = ((abs($number) % 100 < 21 and abs($number) % 100 > 4) ? 'th' : (($test < 4) ? ($test < 3) ? ($test < 2) ? ($test < 1) ? 'th' : 'st' : 'nd' : 'rd' : 'th'));
	return $number . $ext;
}

function marth_count_words($str) {
	return count(preg_split('/\s+/', strip_tags($str), null, PREG_SPLIT_NO_EMPTY));
}

function marth_pluralise($amount, $str, $alt = '') {
	return intval($amount) === 1 ? $str : $str . ($alt !== '' ? $alt : 's');
}

function marth_relative_time($date) {
	if(is_numeric($date)) $date = '@' . $date;

	$user_timezone = new DateTimeZone(Config::app('timezone'));
	$date = new DateTime($date, $user_timezone);

	// get current date in user timezone
	$now = new DateTime('now', $user_timezone);

	$elapsed = $now->format('U') - $date->format('U');

	if($elapsed <= 1) {
		return 'Just now';
	}

	$times = array(
		31104000 => 'year',
		2592000 => 'month',
		604800 => 'week',
		86400 => 'day',
		3600 => 'hour',
		60 => 'minute',
		1 => 'second'
	);

	foreach($times as $seconds => $title) {
		$rounded = $elapsed / $seconds;

		if($rounded > 1) {
			$rounded = round($rounded);
			return $rounded . ' ' . pluralise($rounded, $title) . ' ago';
		}
	}
}

function marth_twitter_account() {
	return site_meta('twitter', 'andrewloreaux');
}

function marth_twitter_url() {
	return 'https://twitter.com/' . twitter_account();
}

function marth_total_articles() {
	return Post::where(Base::table('posts.status'), '=', 'published')->count();
}

function marth_latest_posts($category = 1) {
  // only run on the first call
  if( ! Registry::has('marth_latest_posts')) {
    // capture original article if one is set
    if($article = Registry::get('article')) {
      Registry::set('original_article', $article);
    }
  }

  if( ! $posts = Registry::get('marth_latest_posts')) {
    $posts = Post::where('category', '=', $category)
              ->where('status', '=', 'draft')
              ->sort('created', 'desc')->get();

/*->sort('created', 'desc')->take($limit)->get();*/

    Registry::set('marth_latest_posts', $posts = new Items($posts));
  }

  if($result = $posts->valid()) {
    // register single post
    Registry::set('article', $posts->current());

    // move to next
    $posts->next();
  }
  else {
    // back to the start
    $posts->rewind();

    // reset original article
    Registry::set('article', Registry::get('original_article'));

    // remove items
    Registry::set('marth_latest_posts', false);
  }

  return $result;
}

function marth_pagetag($page) {
  if($page == 'home') {
    $tag = '<p>This is my website.  There are many like it, but this one is mine.</p>';
  }
  else if($page == 'about') {
    $tag = '<p>This is my about me page</p>';
  }
  else if($page == 'blog') {
    $tag = '<p>Some thought and musings on Linux, Computers, Technology, Web Development and Music.</p>';
  }
  else if($page == 'work') {
    $tag = '<p>These are a few of the pages I have delevoped and worked on.</p>';
  }
  else if($page == 'contact') {
    $tag = '<p>If you would like to send me an email please fill out the form below and I will get back to you as soon as I can.  You can also contact me from any of the social sites listed below.</p>';
  }

  return $tag;
}
