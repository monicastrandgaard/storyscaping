<?php
/*
* Plugin Name: Tilmeld Plugin
* Plugin URI: http://storyscaping.annesofiepedersen.com/
* Description: This is a signup plugin based on HTML5, CSS, JS and PHP
* Version: 3.0.2
* Author: Majken Iversen, Cecilie Thierry, Anne Sofie Pedersen og Monica Strandgaard Petersen
* Author: http://storyscaping.annesofiepedersen.com/
* License: GPL2
*/

function newsletter_form()
{

    $content = '';
    $content .= '<div id="login-form">';
    $content .= '<div id="popupCloseButton">X</div>';
    $content .= '<div class="login-face">';
    $content .= '<img src=" '.plugins_url("tilmeld-plugin/img/luftballonstor.png").' " ';
    $content .= 'id="luftballon" alt="login-face"></div>';
    $content .= '<div id="promotion-header">';
    $content .= '<h1 id="promotion-header-title">Bliv lokal guide for Truestory</h1></div>';
    $content .= '<section class="form">';
    $content .= '<form action="#">';
  	$content .= '<div id="promotion-body">';
    $content .= '<p id="promotion-body-text">Ønsker du at melde dig som lokal guide, så skriv lidt om dig selv her, så vender vi tilbage.</p>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" id="username" placeholder="Dit navn" name="username" required><i class="fa fa-user fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="Din email" name="email" required><i class="fa fa-envelope fa-1x"></i>';
    $content .= '</div>';
  	$content .= '<div class="input">';
    $content .= '<input type="text" id="city" placeholder="Din by" name="city" required><i class="fa fa-university fa-1x"></i>';
    $content .= '</div>';
   	$content .= '<div class="input">';
    $content .= '<input type="text" id="about" placeholder="Skriv lidt om dig selv her" name="about" required><i class="fa fa-pencil fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitLuftballonBtn" name="submitLuftballonBtn" value="Tilmeld mig!">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
    
}
    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_newsletter','newsletter_form');

    # Take action - activate it
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap');
        
        wp_enqueue_style('CustomFontRoboto','https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('tilmeld-plugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('tilmeld-plugin/js/script.js'), array('jquery'), null, true);
    }




