@extends('basic.main')

@section('title',  '關於我們')

@section('content')


<section>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h1 class="page-title">關於我們</h1>
            </div>
        </div>

        <div class="row">
            <!-- introduction !-->
            <div class="d-md-flex post-entry-2 half">
                <a class="me-4 thumbnail">
                    <img src="assets/img/aboutus.jpg" alt="" class="img-fluid">
                    <div class="post-meta mt-2">
                        2023.05.21 
                        <span class="mx-1">&bullet;</span> 
                        李棟山四路會師
                    </div>
                </a>
                <div class="ps-md-5 mt-4 mt-md-0">
                    <div class="post-meta mt-4">About us</div>
                    <h2 class="mb-4 display-4">中大登山社</h2>

                    <p>中大登山社於民國 64 年創立，當年第一次活動隊登上李棟山,之後李棟山便成為登山社社山。
                        我們的幹部和社員人數眾多，從平易近人的高山百岳和歷史古道，專精的技能訓練與實作到深度探勘原始山林皆有涉略，
                        亦有從事攀岩、溯溪、單車等活動，歡迎各位加入我們的登山行列，漫遊台灣山林，我們在山林中飽覽大自然令人驚嘆的美，
                        體驗冒險帶來的樂趣、挑戰從未探索的新事物。若想瞭解更多歡迎關注我們的FB粉絲團及 Instagram！
                    </p>
                </div>
            </div>
            <!-- End introduction !-->
            
            <!-- location !-->
            <div class="d-md-flex post-entry-2 half mt-5">
                <a class="me-4 thumbnail order-2">
                    <img src="assets/img/map.png" alt="" class="img-fluid">
                </a>
                <div class="pe-md-5 mt-4 mt-md-0">
                    <div class="post-meta mt-4">Location</div>
                    <h2 class="mb-4 display-4">社窩</h2>
                    <p>山社的社窩位在據德樓的 B1，進去下樓梯遇到的第一間就是了！不論是要租借裝備、上社課、出隊集合都會到社窩去，有空也可以來走走看看喔～</p>
                    <p>社窩就像是我們的第二個家，承載了每個中央山社人滿滿的回憶。</p>
                    <p><a href="https://goo.gl/maps/nvGsBbsf29DT5HxX6" target= "_blank" class="more">Google Map 位置連結</a></p>
                </div>
            </div>
            <!-- End location !-->
        </div>
    </div>
</section>

<!-- activity -->
<section class="mb-5 bg-light py-5">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-between align-items-lg-center">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="post-meta mt-4">Activity</div>
                <h2 class="display-4 mb-4">山社出隊</h2>
                <p>社上主要出隊有三種路線：高山、中級山、溯溪。</p>
                <ol>
                    <li>高山：行走在三千公尺上的山稜線上，能夠欣賞群山繚繞的美景。</li>
                    <li>中級山：行走在一千到三千公尺的山中，多半走在森林中，能夠欣賞蓊鬱森林的美景。</li>
                    <li>溯溪：沿著溪谷溯行，能夠看到各種不同的溪谷風景，如：瀑布、深潭等等。</li>
                </ol>
                <p><a href="{{ route('record.index') }}" class="more">看看我們的紀錄吧</a></p>
            </div>
            <div class="col-lg-8">
                <div class="row thumbnail">
                    <div class="col-4">
                        <img src="assets/img/high.jpg" alt="" class="img-fluid">
                        <div class="post-meta mt-2">高山路線</div>
                    </div>
                    <div class="col-4 mt-4">
                        <img src="assets/img/middle.jpeg" alt="" class="img-fluid">
                        <div class="post-meta mt-2">中級山路線</div>
                    </div>
                    <div class="col-4 mt-4">
                        <img src="assets/img/river.jpg" alt="" class="img-fluid mt-4 ">
                        <div class="post-meta mt-2">溯溪路線</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End activity -->

<!-- 幹部介紹 -->
<!-- <section>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="display-4">山社幹部介紹</h2>
                        <p>因山而來，因人而留，大家在山上一同面對困難，一同歡笑，凝聚深切的感情，因此，每年山社都會有著二十多位的幹部們，自願留下來當幹部，無償為社上付出。</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="assets/img/president.jpg" alt="" class="img-fluid rounded-circle w-50 h-50 mb-4">
                <h4>林品勲</h4>
                <span class="d-block mb-3 text-uppercase">社長</span>
                <p>
                    哇搭西哇地科二ㄉ林品勲，接下來會是社長喜歡吃東西，但是最近有點變胖，希望暑假可以瘦一點。
                    我大一就進來山社爬山了，兩年下來去蠻多地方的，但是也沒有到很厲害就是了。接下來一年我會跟大家一起經營這個社團，有什麼建議或指點的也請多多指教ㄛ🙇
                </p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="assets/img/temp.png" alt="" class="img-fluid rounded-circle w-50 h-50 mb-4">
                <h4>林序樺</h4>
                <span class="d-block mb-3 text-uppercase">副社長</span>
                <p>
                    回顧這兩年我爬的隊伍，可說是五花八門，溯溪、溯登、高山、中級山、非傳統、長程縱走，各種隊伍幾乎都有在走，最終透過刪去法發現，我還是喜歡爬高山百岳，嚮往那些壯闊的風景。
                </p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="assets/img/guide.jpg" alt="" class="img-fluid rounded-circle w-50 h-50 mb-4">
                <h4>張蘴栩</h4>
                <span class="d-block mb-3 text-uppercase">嚮導長</span>
                <p>
                    我可以邊爬山邊睡覺🥱
                </p>
            </div>
        </div>
    </div>
</section> -->

@endsection
