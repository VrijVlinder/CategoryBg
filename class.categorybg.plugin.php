<?php if(!defined('APPLICATION')) exit();

//define plugin

$PluginInfo['CategoryBg'] = array(
    'Name' => 'CategoryBg',
    'Description' => 'Adds background images and or colors to each category in the category list. All you need to do is edit the css file and add the category name of each category and add your images in the images folder of the plugin.',
    'Version' => '1.0',
    'MobileFriendly' => TRUE,
    'Author' => "VrijVlinder"
    
);

//Send style sheet to head of the categories Index
class CategoryBgPlugin extends Gdn_Plugin {

    public function CategoriesController_Render_Before($Sender) {
            $Sender->AddCssFile('plugins/CategoryBg/catbg.css');
   }



    public function Setup() {
    }
}
