<?php

namespace App\Presenters;

class PostPresenter
{
   public function getCloudBaseUrl()
   {
       return config("file.gcp_prefix");
   }
}
