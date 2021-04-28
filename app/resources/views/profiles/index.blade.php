@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
           <img height="150px" width="150px" src="https://instagram.fjsr8-1.fna.fbcdn.net/v/t51.2885-19/s320x320/97566921_2973768799380412_5562195854791540736_n.jpg?tp=1&_nc_ht=instagram.fjsr8-1.fna.fbcdn.net&_nc_ohc=vzFfeNyp-0cAX_81QU9&edm=ABfd0MgAAAAA&ccb=7-4&oh=9e294bc629f0e123f3f6cf02c70de5f4&oe=60A10E5F&_nc_sid=7bff83" class="rounded-circle" alt="">

       </div>
       <div class="col-9 pt-5">
           <div class="d-flex justify-content-between align-items-baseline">
               <h1>{{$user->username}} </h1>
               <a href="#">Add new Post</a>

           </div>
           <div class="d-flex">
               <div class="pr-4"><strong>222</strong> posts</div>
               <div class="pr-4"><strong>11k</strong> followers</div>
               <div class="pr-4"><strong>200</strong> following</div>
           </div>
           <div class="font-weight-bold pt-4">{{$user->profile->title}}</div>
           <div>{{$user->profile->description}} </div>
           <div class="font-weight-bold "><a href="#">{{$user->profile->url}}</a></div>
       </div>
   </div>
    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://scontent-maa2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.128.1032.1032a/s640x640/166457897_348657959905181_7277256522874462696_n.jpg?tp=1&_nc_ht=scontent-maa2-1.cdninstagram.com&_nc_cat=105&_nc_ohc=y05IWr2BkRcAX9Ylhrm&edm=ABfd0MgAAAAA&ccb=7-4&oh=30b78fcf280762ff16558a9f4337d61c&oe=60A20F1B&_nc_sid=7bff83" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-maa2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c1.0.826.826a/s640x640/172534872_1137110053468901_1056992050505928233_n.jpg?tp=1&_nc_ht=scontent-maa2-1.cdninstagram.com&_nc_cat=105&_nc_ohc=0L3V-MiuT04AX894zZ4&edm=ABfd0MgAAAAA&ccb=7-4&oh=9548d16340d114ebdeab030e63bd9e59&oe=60A1B19A&_nc_sid=7bff83" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-maa2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c2.0.823.823a/s640x640/169635101_867959833760458_8524905489518580269_n.jpg?tp=1&_nc_ht=scontent-maa2-1.cdninstagram.com&_nc_cat=110&_nc_ohc=6hQ4F3X613IAX_gbAdj&edm=ABfd0MgAAAAA&ccb=7-4&oh=5ebb251c76ddba444116e4905bfac31a&oe=60A08BD4&_nc_sid=7bff83" alt="">
        </div>
    </div>
</div>
@endsection
