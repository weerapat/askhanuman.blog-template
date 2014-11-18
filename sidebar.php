
<hr class="hr-style">

<div class="menu">

<ul class="list-unstyled"><li ng-class="{ active: menu == 'getCar'}" class="active"><a ng-click="menu = 'getCar'" href="#">คุณจะได้รับกรมธรรม์ประกันภัยรถยนต์<br>จากอาสค์ หนุมานได้อย่างไร</a></li><li ng-class="{ active: menu == 'payPolicy'}"><hr class="hr-style"><ul class="list-unstyled"><a ng-click="menu = 'payPolicy'" href="#">วิธีการชำระค่ากรมธรรม์ประกันภัยของคุณ</a><li ng-show="menu == 'payPolicy' || menu == 'bank' || menu == 'card' || menu == 'cashOn'" style="margin-top: 12px;" class="ng-hide"><a ng-click="menu = 'bank'" href="#"><i class="fa fa-chevron-right"></i> โอนเงินผ่านธนาคาร</a></li><li ng-show="menu == 'payPolicy' || menu == 'bank' || menu == 'card' || menu == 'cashOn'" class="ng-hide"><a ng-click="menu = 'card'" href="#"><i class="fa fa-chevron-right"></i> บัตรเครดิต</a></li><li ng-show="(menu == 'payPolicy') || (menu == 'bank') || menu == 'card' || menu == 'cashOn'" class="ng-hide"><a ng-click="menu = 'cashOn'" href="#"><i class="fa fa-chevron-right"></i> ชำระเงินสดเมื่อรับกรมธรรม์</a></li></ul><hr class="hr-style"></li><li class="list-unstyled" ng-class="{ active: menu == 'sendDoc'}"><a ng-click="menu = 'sendDoc'" href="#"> เอกสารที่จำเป็น </a></li><hr class="hr-style"></ul>

</div>


<div class="sidebar">
<p>This is the side bar</p>
Template files are the building blocks of your WordPress site. They fit together like the pieces of a puzzle to generate the web pages on your site. Some templates (the header and footer template files for example) are used on all the web pages, while others are used only under specific conditions.<br/><br/>

A traditional web page consists of two files:<br/><br/>

The XHTML page to hold the structure and content of the page and
the CSS Style Sheet which holds the presentation styles of the page.<br/><br/>
In WordPress, the (X)HTML structure and the CSS style sheet are present but the content is generated "behind the scenes" by various template files. The template files and the style sheet are stored together as a WordPress Theme. To learn more about creating Themes, read Theme Development.<br/><br/>
</div>