<?php

    use MyShowsRpc\ApiNews;
    use MyShowsRpc\RpcClient;
    use App\News\NewsManager;

    include_once 'vendor/autoload.php';


    $rpcClient   = RpcClient::GetInstance( 'https://api.myshows.me/v3/rpc/' );
    $newsManager = new NewsManager( $rpcClient );

    $title = $newsManager->GetNewsTitleById( 1 );
    echo $title ."\n"; // will be "Russian Doll. Жизни матрешки"

    $title = $newsManager->GetNewsTitleById( -1 );
    echo $title ."\n"; // will be "News with newsId=-1 is not found", because we catch rpc error exception in our manager.

    /** @var ApiNews[] $news */
    $news = $newsManager->GetLastThreeNews();
    foreach ( $news as $item ) {
        echo $item->title ."\n"; // will output last 3 news titles.
    }