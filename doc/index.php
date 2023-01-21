<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ドキュメント | ピラミッド</title>
  <link rel="icon" type="image/png" href="https://edge-server.224.works/pyramid/favicon16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="https://edge-server.224.works/pyramid/favicon32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="https://edge-server.224.works/pyramid/favicon48.png" sizes="48x48">
  <link rel="icon" type="image/png" href="https://edge-server.224.works/pyramid/favicon64.png" sizes="64x64">
  <link rel="apple-touch-icon" href="https://edge-server.224.works/pyramid/apple-touch-icon-152.png">
  <!-- OGP -->
  <meta property="og:type" content="article">
  <meta property="og:description" content="関数型ビジュアルプログラミング言語、ピラミッドのドキュメントページ。関数の仕様を知ろう。">
  <meta property="og:title" content="ドキュメント | ピラミッド">
  <meta property="og:url" content="https://pyramid.224.works/tutorial">
  <meta property="og:image" content="https://edge-server.224.works/pyramid/pyramid_twitter_card.jpg">
  <meta property="og:site_name" content="ドキュメント | ピラミッド">
  <meta property="og:locale" content="ja_JP">
  <!-- /OGP -->
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:description" content="関数型ビジュアルプログラミング言語、ピラミッドのドキュメントページ。関数の仕様を知ろう。">
  <meta property="twitter:title" content="ドキュメント | ピラミッド">
  <meta property="twitter:url" content="https://pyramid.224.works/tutorial">
  <meta name="twitter:image" content="https://edge-server.224.works/pyramid/pyramid_twitter_card.jpg">
  <meta name="twitter:domain" content="224.works">
  <!-- /Twitter Card -->
  <!-- CSS
  Copyright (c) Tailwind Labs, Inc.
  Released under the MIT license
  https://github.com/tailwindlabs/tailwindcss/blob/master/LICENSE -->
  <link rel="stylesheet" href="https://edge-server.224.works/pyramid/design.css">
  <link rel="stylesheet" href="blockpreview.css">
  <!-- /CSS -->
</head>
<header class="container max-w-screen-lg mx-auto py-1 flex flex-wrap items-center">
  <a href="../">
    <img class="h-12 ml-1 mr-2 p-2 hover:opacity-80" src="https://edge-server.224.works/pyramid/logo.svg"
      alt="Pyramid logo(トップヘ戻る)">
    </img>
  </a>
</header>

<body class="container max-w-screen-lg mx-auto flex flex-col min-h-screen">
  <main class="flex-grow">
    <dev class="sm:flex">
      <section class="m-4 leading-relaxed sm:order-2">
        <?php include('pageloader.php'); ?>
      </section>
      <aside class="w-56 ml-2 my-2 text-slate-800 order-1" aria-label="Sidebar">
        <a class="mx-1" href="https://pyramid.224.works/doc/">
          <h1
            class="inline-flex items-center rounded bg-slate-100 w-52 py-1 pl-2 text-slate-800 hover:opacity-90 text-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="lightslategray"
              class="h-8 my-2 ml-2 mr-3">
              <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path
                d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM80 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm0 32v64H288V256H96zM240 416h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
            </svg>
            ドキュメント
          </h1>
        </a>
        <a href="?page=literal" class="hover:text-slate-700">
          <h2 class="pl-2 mx-2 mt-4 text-xl border-l-2 border-sky-100 hover:border-sky-400">
            型</h2>
        </a>
        <a href="?page=i32" class="hover:text-slate-700">
          <h3 class="pl-2 mx-2 mt-3 text-lg border-l-2 border-sky-100 hover:border-sky-400 ml-6">i32</h3>
        </a>
        <a href="#" class="hover:text-slate-700">
          <h2 class="pl-2 mx-2 mt-4 text-xl border-l-2 border-sky-100 hover:border-sky-400">
            一項演算子</h2>
        </a>
        <a href="#" class="hover:text-slate-700">
          <h3 class="pl-2 mx-2 mt-3 text-lg border-l-2 border-sky-100 hover:border-sky-400 ml-6">論理否定</h3>
        </a>
        <a href="#" class="hover:text-slate-700">
          <h2 class="pl-2 mx-2 mt-4 text-xl border-l-2 border-sky-100 hover:border-sky-400">
            二項演算子</h2>
        </a>
        <a href="#" class="hover:text-slate-700">
          <h3 class="pl-2 mx-2 mt-3 text-lg border-l-2 border-sky-100 hover:border-sky-400 ml-6">加算</h3>
        </a>
        <a href="#" class="hover:text-slate-700">
          <h3 class="pl-2 mx-2 mt-3 text-lg border-l-2 border-sky-100 hover:border-sky-400 ml-6">減算</h3>
        </a>
        <a href="#" class="hover:text-slate-700">
          <h3 class="pl-2 mx-2 mt-3 text-lg border-l-2 border-sky-100 hover:border-sky-400 ml-6">乗算</h3>
        </a>
        <a href="#" class="hover:text-slate-700">
          <h3 class="pl-2 mx-2 mt-3 text-lg border-l-2 border-sky-100 hover:border-sky-400 ml-6">除算（切り捨て）</h3>
        </a>
        <a href="#" class="hover:text-slate-700">
          <h3 class="pl-2 mx-2 mt-3 text-lg border-l-2 border-sky-100 hover:border-sky-400 ml-6">あまり演算</h3>
        </a>
        <a href="#" class="hover:text-slate-700">
          <h3 class="pl-2 mx-2 mt-3 text-lg border-l-2 border-sky-100 hover:border-sky-400 ml-6">累乗演算</h3>
        </a>
        <a href="#" class="hover:text-slate-700">
          <h3 class="pl-2 mx-2 mt-3 text-lg border-l-2 border-sky-100 hover:border-sky-400 ml-6">論理積</h3>
        </a>
        <a href="#" class="hover:text-slate-700">
          <h3 class="pl-2 mx-2 mt-3 text-lg border-l-2 border-sky-100 hover:border-sky-400 ml-6">論理和</h3>
        </a>
        <a href="#" class="hover:text-slate-700">
          <h2 class="pl-2 mx-2 mt-4 text-xl border-l-2 border-sky-100 hover:border-sky-400">
            組み込み関数</h2>
        </a>
      </aside>
    </dev>
  </main>
</body>
<footer class="container max-w-screen-lg p-2 text-slate-600">
  <p>Copyright (c) 2022 TsumikiWorks</p>
  <p class="text-sm">Released under the MIT license
    <a href="https://github.com/tsumiki-works/Pyramid/blob/main/LICENSE"
      class="hover:text-slate-500">https://github.com/tsumiki-works/Pyramid/blob/main/LICENSE</a>
  </p>
</footer>

</html>
