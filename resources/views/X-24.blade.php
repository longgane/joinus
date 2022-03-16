@extends('layout.index2')
@section('content')
<div class="container">
    <div class="message-2-page X-24-page">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">ホーム</a></li>
          <li class="breadcrumb-item active" aria-current="page">ここも</li>
        </ol>
      </nav>

      <div class="message-2-main">
        <h2 class="big-title">メッセージ</h2>
       
        <div class="message-block ">
          <div class="search-box">
            <div class="heading">宛先</div>

            <div class="search-main">
              <div class="search-input">
                <input type="text" class="input" placeholder="宛先検索">
                <div class="search-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M15.5006 14.0006H14.7106L14.4306 13.7306C15.6306 12.3306 16.2506 10.4206 15.9106 8.39063C15.4406 5.61063 13.1206 3.39063 10.3206 3.05063C6.09063 2.53063 2.53063 6.09063 3.05063 10.3206C3.39063 13.1206 5.61063 15.4406 8.39063 15.9106C10.4206 16.2506 12.3306 15.6306 13.7306 14.4306L14.0006 14.7106V15.5006L18.2506 19.7506C18.6606 20.1606 19.3306 20.1606 19.7406 19.7506C20.1506 19.3406 20.1506 18.6706 19.7406 18.2606L15.5006 14.0006ZM9.50063 14.0006C7.01063 14.0006 5.00063 11.9906 5.00063 9.50063C5.00063 7.01063 7.01063 5.00063 9.50063 5.00063C11.9906 5.00063 14.0006 7.01063 14.0006 9.50063C14.0006 11.9906 11.9906 14.0006 9.50063 14.0006Z"
                      fill="#5488AD" />
                  </svg>
                </div>
              </div>

              <div class="guild-list">
                <div class="guild-item active">
                  <div class="guild-logo">
                    <img srcset="/joinus/img/guild-logo-1.png 2x" alt="">
                  </div>

                  <div class="guild-name">Join:us本部</div>
                </div>
                <div class="guild-item">
                  <div class="guild-logo">
                    <img srcset="/joinus/img/guild-logo-2.png 2x" alt="">
                  </div>

                  <div class="guild-name">Guild南砺市</div>
                </div>
                <div class="guild-item">
                  <div class="guild-logo">
                    <img srcset="/joinus/img/guild-logo-3.png 2x" alt="">
                  </div>

                  <div class="guild-name">青幡神社</div>
                </div>
                <div class="guild-item">
                  <div class="guild-logo">
                    <img srcset="/joinus/img/guild-logo-4.png 2x" alt="">
                  </div>

                  <div class="guild-name">青幡神社</div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  @endsection