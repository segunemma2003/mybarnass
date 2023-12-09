<?php
namespace Skb_Cife;

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*--------------------------
*   Class class_Open_Iconic Icon Manager
* -------------------------*/
class Skb_Cife_class_Open_Iconic_Icon_Manager{

    private static $instance = null;

    public static function instance() {
        if ( is_null( self::$instance ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    function __construct(){
        $this->init();
    }

    public function init() {

        // Custom icon filter
        add_filter( 'elementor/icons_manager/additional_tabs', [ $this,'skb_cife_open_iconic_icon'] );  

    }

	public function skb_cife_open_iconic_icon( $open_iconic_icons_args = array() ) {

	    // Append new icons
	    $open_iconic_icons = array(
			'account-login',
			'account-logout',
			'action-redo',
			'action-undo',
			'align-center',
			'align-left',
			'align-right',
			'aperture',
			'arrow-bottom',
			'arrow-circle-bottom',
			'arrow-circle-left',
			'arrow-circle-right',
			'arrow-circle-top',
			'arrow-left',
			'arrow-right',
			'arrow-thick-bottom',
			'arrow-thick-left',
			'arrow-thick-right',
			'arrow-thick-top',
			'arrow-top',
			'audio-spectrum',
			'audio',
			'badge',
			'ban',
			'bar-chart',
			'basket',
			'battery-empty',
			'battery-full',
			'beaker',
			'bell',
			'bluetooth',
			'bold',
			'bolt',
			'book',
			'bookmark',
			'box',
			'briefcase',
			'british-pound',
			'browser',
			'brush',
			'bug',
			'bullhorn',
			'calculator',
			'calendar',
			'camera-slr',
			'caret-bottom',
			'caret-left',
			'caret-right',
			'caret-top',
			'cart',
			'chat',
			'check',
			'chevron-bottom',
			'chevron-left',
			'chevron-right',
			'chevron-top',
			'circle-check',
			'circle-x',
			'clipboard',
			'clock',
			'cloud-download',
			'cloud-upload',
			'cloud',
			'cloudy',
			'code',
			'cog',
			'collapse-down',
			'collapse-left',
			'collapse-right',
			'collapse-up',
			'command',
			'comment-square',
			'compass',
			'contrast',
			'copywriting',
			'credit-card',
			'crop',
			'dashboard',
			'data-transfer-download',
			'data-transfer-upload',
			'delete',
			'dial',
			'document',
			'dollar',
			'double-quote-sans-left',
			'double-quote-sans-right',
			'double-quote-serif-left',
			'double-quote-serif-right',
			'droplet',
			'eject',
			'elevator',
			'ellipses',
			'envelope-closed',
			'envelope-open',
			'euro',
			'excerpt',
			'expand-down',
			'expand-left',
			'expand-right',
			'expand-up',
			'external-link',
			'eye',
			'eyedropper',
			'file',
			'fire',
			'flag',
			'flash',
			'folder',
			'fork',
			'fullscreen-enter',
			'fullscreen-exit',
			'globe',
			'graph',
			'grid-four-up',
			'grid-three-up',
			'grid-two-up',
			'hard-drive',
			'header',
			'headphones',
			'heart',
			'home',
			'image',
			'inbox',
			'infinity',
			'info',
			'italic',
			'justify-center',
			'justify-left',
			'justify-right',
			'key',
			'laptop',
			'layers',
			'lightbulb',
			'link-broken',
			'link-intact',
			'list-rich',
			'list',
			'location',
			'lock-locked',
			'lock-unlocked',
			'loop-circular',
			'loop-square',
			'loop',
			'magnifying-glass',
			'map-marker',
			'map',
			'media-pause',
			'media-play',
			'media-record',
			'media-skip-backward',
			'media-skip-forward',
			'media-step-backward',
			'media-step-forward',
			'media-stop',
			'medical-cross',
			'menu',
			'microphone',
			'minus',
			'monitor',
			'moon',
			'move',
			'musical-note',
			'paperclip',
			'pencil',
			'people',
			'person',
			'phone',
			'pie-chart',
			'pin',
			'play-circle',
			'plus',
			'power-standby',
			'print',
			'project',
			'pulse',
			'puzzle-piece',
			'question-mark',
			'rain',
			'random',
			'reload',
			'resize-both',
			'resize-height',
			'resize-width',
			'rss-alt',
			'rss',
			'script',
			'share-boxed',
			'share',
			'shield',
			'signal',
			'signpost',
			'sort-ascending',
			'sort-descending',
			'spreadsheet',
			'star',
			'sun',
			'tablet',
			'tag',
			'tags',
			'target',
			'task',
			'terminal',
			'text',
			'thumb-down',
			'thumb-up',
			'timer',
			'transfer',
			'trash',
			'underline',
			'vertical-align-bottom',
			'vertical-align-center',
			'vertical-align-top',
			'video',
			'volume-high',
			'volume-low',
			'volume-off',
			'warning',
			'wifi',
			'wrench',
			'x',
			'yen',
			'zoom-in',
			'zoom-out'
				
			
	    );
	    
	    $open_iconic_icons_args['skb_cife-open_iconic-icon'] = array(
	        'name'          => 'skb_cife-open_iconic-icon',
	        'label'         => esc_html__( 'Skyboot:: Open Iconic Icon', 'skb_cife' ),
	        'labelIcon'     => 'fas fa-user',
	        'prefix'        => 'oi-',
	        'displayPrefix' => 'oi',
	        'url'           => SKB_CIFE_ASSETS . 'css/open-iconic.css',
	        'icons'         => $open_iconic_icons,
	        'ver'           => SKB_CIFE_VERSION,
	    );

	    return $open_iconic_icons_args;
	}



}
Skb_Cife_class_Open_Iconic_Icon_Manager::instance();