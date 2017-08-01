<?php

function link_assets($path)
{
    return base_url() . 'assets/' .  $path;
}

function admin_link($uri = '')
{
    return site_url('admin/' . $uri);
}

function admin_redirect($uri = '')
{
    return redirect('admin/' . $uri);
}
