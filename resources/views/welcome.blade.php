@extends('layouts.default')
@section('content')
            <div id='module308' class='form Handle  formStyle2 ' _autoHeight='1' _height='0' _bHeight='0'>
                <div _bannerAutoHeight='1' class='formBannerTitle formBannerTitle308'>
                    <div class='titleLeft titleLeft308'>
                    </div>
                    <div class='titleCenter titleCenter308'>
                        <div class='titleText titleText308'>
                            <div class='titleTextIcon icon-titleText'>&nbsp;</div>
                            <div class='textContent'>今日热搜词(数据分析门户热词)</div>
                        </div>
                        <div class='formBannerMore formBannerMore308'></div>
                    </div>
                    <div class='titleRight titleRight308'>
                    </div>
                </div>
                <div class='formMiddle formMiddle308'>
                    <div class='middleLeft middleLeft308'>
                    </div>
                    <div class='middleCenter middleCenter308'>
                        <div class='formMiddleContent formMiddleContent308 moduleContent'>
                            <div class='J_richContentPanel308 f-contentPanel'>
                                <div class='textImg1' style='width:35%'><img
                                            src='{{$today_word['pic']}}'
                                            data-source='http://11648675.s61i.faiusr.com/2/AD0Io-3GBRACGAAgqM_1wQUokLCc6gIwkQE4ggE.jpg'
                                            style='width:100%'/></div>
                                <div class='richContent richContent1 richContent308'><p><span
                                                style="font-size:0.65rem;font-family:微软雅黑">今日热词:{{$today_word['word']}}</span></p>
                                    <p><a href="{{$today_word['url']}}">
                                        <span
                                                style="font-size:0.65rem;font-family:微软雅黑">热词头条:{{$today_word['title']}}</span></a></p>
                                    <p><span
                                                style="font-size:0.65rem;font-family:微软雅黑">小编话痨:{{$today_word['comment']}}</span></p>
                                </div>
                                <div class='clear'></div>
                            </div>
                        </div>
                    </div>
                    <div class='middleRight middleRight308'>
                    </div>
                </div>
            </div>
            <div id='module302' class='form Handle  formStyle6 ' _autoHeight='1' _height='0' _bHeight='0'>
                <div _bannerAutoHeight='1' class='formBannerTitle formBannerTitle302'>
                    <div class='titleLeft titleLeft302'>
                    </div>
                    <div class='titleCenter titleCenter302'>
                        <div class='titleText titleText302'>
                            <div class='titleTextIcon icon-titleText'>&nbsp;</div>
                            <div class='textContent'>今日热门文章([简书]最热文章)</div>
                        </div>
                        <div class='formBannerMore formBannerMore302'><a class='titleMoreLink titleMoreLink302'
                                                                         href=nr.jsp?moduleId=302><span
                                        class='titleMoreIcon icon-titleMore titleMoreIcon302'>&nbsp;</span><span
                                        class='titleMore titleMore302'>更多</span></a></div>
                    </div>
                    <div class='titleRight titleRight302'>
                    </div>
                </div>
                <div class='formMiddle formMiddle302'>
                    <div class='middleLeft middleLeft302'>
                    </div>
                    <div class='middleCenter middleCenter302'>
                        <div class='formMiddleContent formMiddleContent302 moduleContent'>
                            <div class='newsList ' id='newsList302'>

                                @foreach ($articles as $article)
                                <div id='newsLine5' topClassName='top1' topSwitch='on' newsId='5' newsName='请编辑文章标题'
                                     class='newsLine line icon-gline  wWLine  firstClass  wholeLine J_lineH j-lineH'>
                                    <div id='lineBody5' class='lineBody lineBodyTable'>
                                        <div class='linkTableCell'>
                                            <div class='linkTable'><a hidefocus='true'
                                                                      href='{{$article['url']}}'
                                                                      target=_self>{{$article['title']}}</a></div>
                                        </div>
                                    </div>
                                    <div class='newsElementsPanel g_newsElementsPanel J_newsElementsPanel'
                                         onclick='window.location.href="nd.jsp?mid=302&id=5&groupId=0&typeList=%5B%5D"'>
                                        <div class='ne_newsTime'>{{$article['date']}}</div>
                                    </div>
                                </div>
                                <div class='g_separator separatorLine'></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class='middleRight middleRight302'>
                    </div>
                </div>
            </div>
            <div id='module301' class='form Handle  formStyle3 ' _autoHeight='1' _height='0' _bHeight='0'>
                <div _bannerAutoHeight='1' class='formBannerTitle formBannerTitle301'>
                    <div class='titleLeft titleLeft301'>
                    </div>
                    <div class='titleCenter titleCenter301'>
                        <div class='titleText titleText301'>
                            <div class='titleTextIcon icon-titleText'>&nbsp;</div>
                            <div class='textContent'>热门专题([简书]热门专题)</div>
                        </div>
                        <div class='formBannerMore formBannerMore301'><a class='titleMoreLink titleMoreLink301'
                                                                         href=pr.jsp?moduleId=301><span
                                        class='titleMoreIcon icon-titleMore titleMoreIcon301'>&nbsp;</span><span
                                        class='titleMore titleMore301'>更多</span></a></div>
                    </div>
                    <div class='titleRight titleRight301'>
                    </div>
                </div>
                <div class='formMiddle formMiddle301'>
                    <div class='middleLeft middleLeft301'>
                    </div>
                    <div class='middleCenter middleCenter301'>
                        <div class='formMiddleContent formMiddleContent301 moduleContent'>
                            <div class='mProductList fk-mProductList9' id='mProductList301' mType='9'>
                                <div id='productSlide301' class='productSlide'>
                                    <div id='productSlideList301' class='productSlideList'>

                                        @foreach ($categorys as $category)
                                        <div topClassName='productListTopIcon' topSwitch='on' productId='1'
                                             productName='产品1' class='productCrossedSlideSec leftPosition J_prodItem'
                                             id='productCrossedSlideSec1_module301'><a href='article/list/{{$category['id']}}'
                                                                                       class='J_prodItem-a'>
                                                <div class='CrossedSlideSecImg' id='CrossedSlideSecImg1module301'>
                                                    <div class='style9Img firstLastPro'
                                                         data-original='{{$category['pic']}}'
                                                         style='background:no-repeat;background-size:cover;background-position:center;'></div>
                                                </div>
                                                <div class='paramPadding paramCollection'><p
                                                            class='g_link paramName proNameToNewStyle paramNowrap textAlign_left'>
                                                        {{$category['name']}}</p></div>
                                            </a></div>

                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='middleRight middleRight301'>
                    </div>
                </div>
            </div>
@endsection





