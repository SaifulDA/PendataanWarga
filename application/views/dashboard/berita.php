<?php

$curl = curl_init();
$API_KEY = "ecd58d35a22d4a87869a8455fe10741d";

curl_setopt_array($curl, [
    CURLOPT_URL => "https://newsapi.org/v2/top-headlines?country=id&apiKey=$API_KEY",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36',
]);

// Fetch news data from news api and decode json
$response = curl_exec($curl);
$results = json_decode($response, true);
$err = curl_error($curl);
curl_close($curl);

?>
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-light">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-black">Berita Hari Ini</h1>
                        <?= $this->session->flashdata('message') ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="row">
                    <?php foreach ($results['articles'] as $article) : ?>
                        <div class="col-sm-10  py-0 pl-3 pr-1 featcard">
                            <div id="featured" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card text-white">
                                            <img class="card-img img-fluid" src="<?= $article['urlToImage']; ?>" alt="">
                                            <div class="card-img-overlay d-flex linkfeat">
                                                <a href="<?= $article['url']; ?>" class="align-self-end text-light" target="_blank">
                                                    <span class="badge"><?= $article['author']; ?></span>
                                                    <br>
                                                    <h4 class="card-title"><?= $article['title']; ?></h4>
                                                    <p class="textfeat" style="display: none;"><?= $article['description']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->
</div>
<script>
    $(document).ready(function() {
        $(".linkfeat").hover(
            function() {
                $(".textfeat").show(500);
            },
            function() {
                $(".textfeat").hide(500);
            }
        );
    });
</script>