<?php

class EmbeddedVideoView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $object = new TElement('iframe');
        $object->style = 'width: 100%; height: 600px;'; 
        $object->src = 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4';
        $object->frameborder = '0';
        $object->allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
        $object->allowfullscreen = 'true';


        parent::add($object); 
    }
}