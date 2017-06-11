@extends('layouts.default')
@section('content')
    <div id='module307' class='form Handle  formStyle6 ' _autoHeight='1' _height='0' _bHeight='0'>
        <div _bannerAutoHeight='1' class='formBannerTitle formBannerTitle307'>
            <div class='titleLeft titleLeft307'>
            </div>
            <div class='titleCenter titleCenter307'>
                <div class='titleText titleText307'>
                    <div class='titleTextIcon icon-titleText'>&nbsp;</div>
                    <div class='textContent'>文章列表([简书]热门文章)</div>
                </div>
                <div class='formBannerMore formBannerMore307'><a class='titleMoreLink titleMoreLink307'
                                                                 href=nr.jsp?moduleId=307><span
                                class='titleMoreIcon icon-titleMore titleMoreIcon307'>&nbsp;</span><span
                                class='titleMore titleMore307'>更多</span></a></div>
            </div>
            <div class='titleRight titleRight307'>
            </div>
        </div>
        <div class='formMiddle formMiddle307'>
            <div class='middleLeft middleLeft307'>
            </div>
            <div class='middleCenter middleCenter307'>
                <div class='formMiddleContent formMiddleContent307 moduleContent'>
                    <div class='newsList ' id='newsList307'>
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
                        </div>
                        <div class='g_separator separatorLine'></div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection