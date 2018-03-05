@extends('master-user')
@section('content')
    <div id="breadcrumbs">
    	<span xmlns:v="http://rdf.data-vocabulary.org/#">
    		<span typeof="v:Breadcrumb"><a href="" rel="v:url" property="v:title">Home</a> » 
    			<span class="breadcrumb_last">Liên hệ</span>
    		</span>
    	</span>
    </div>
    <article id="post-78" class="post-78 page type-page status-publish hentry">
        <header class="entry-header">
           <h1 class="entry-title">Liên hệ</h1>
        </header>
        <!-- .entry-header -->
        <div class="entry-content">
           <div class="content_about"></div>
           <div class="content_about"><strong>CÔNG TY TNHH RADOLIGHT</strong></div>
           <div class="content_about"><strong>Địa chỉ: Đường Linh Trung, Phường Linh trung, Quận Thủ Đức, TP. Hồ Chí Minh</strong></div>
           
           <div class="content_about"><strong>Hotline: 0931436927 &#8211; Zalo, viber: 0931436927</strong></div>
           
           <div class="content_about"><strong>Email</strong>: <strong>nguyenminhhieu9696@gmail.com</strong></div>
           <br>
           <div role="form" class="wpcf7" id="wpcf7-f165-p78-o1" lang="vi" dir="ltr">
              <div class="screen-reader-response"></div>
              <form action="{{URL('/')}}/lien-he" method="post" class="wpcf7-form" novalidate="novalidate">
                 <p>Tên của bạn (bắt buộc)<br />
                    <span class="wpcf7-form-control-wrap your-name"><input type="text" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" name="lh[name]"/></span> 
                 </p>
                 <p>Địa chỉ Email (bắt buộc)<br />
                    <span class="wpcf7-form-control-wrap your-email"><input type="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" name="lh[email]"/></span> 
                 </p>
                 <p>Tiêu đề:<br />
                    <span class="wpcf7-form-control-wrap your-subject"><input type="text" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" name="lh[title]"/></span> 
                 </p>
                 <p>Nội dung<br />
                    <span class="wpcf7-form-control-wrap your-message"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" name="lh[content]"></textarea></span> 
                 </p>
                 <p><input type="submit" value="Gửi đi" class="wpcf7-form-control wpcf7-submit" /></p>
                 <div class="wpcf7-response-output wpcf7-display-none"></div>
              </form>
           </div>
        </div>
    </article>
@endsection