@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')
<main id="main">

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h3><span>Contact Us</span></h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4">
          <div class="info-box mb-4">
            <svg width="21" height="38" viewBox="0 0 41 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.5 0C9.16643 0 0 9.077 0 20.3C0 35.525 20.5 58 20.5 58C20.5 58 41 35.525 41 20.3C41 9.077 31.8336 0 20.5 0ZM20.5 27.55C18.5582 27.55 16.696 26.7862 15.323 25.4265C13.9499 24.0669 13.1786 22.2228 13.1786 20.3C13.1786 18.3772 13.9499 16.5331 15.323 15.1735C16.696 13.8138 18.5582 13.05 20.5 13.05C22.4418 13.05 24.304 13.8138 25.677 15.1735C27.0501 16.5331 27.8214 18.3772 27.8214 20.3C27.8214 22.2228 27.0501 24.0669 25.677 25.4265C24.304 26.7862 22.4418 27.55 20.5 27.55Z" fill="#076b3a"/>
                </svg>
                
            <h3>Our Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="info-box  mb-4">
            <svg width="41" height="28" viewBox="0 0 61 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M54.9 0H6.1C2.745 0 0.0305 2.7 0.0305 6L0 42C0 45.3 2.745 48 6.1 48H54.9C58.255 48 61 45.3 61 42V6C61 2.7 58.255 0 54.9 0ZM53.68 12.75L32.1165 26.01C31.1405 26.61 29.8595 26.61 28.8835 26.01L7.32 12.75C7.01417 12.5811 6.74635 12.353 6.53276 12.0794C6.31917 11.8057 6.16424 11.4923 6.07735 11.1581C5.99047 10.8239 5.97343 10.4758 6.02728 10.1349C6.08112 9.79404 6.20473 9.46744 6.39061 9.1749C6.57649 8.88236 6.82079 8.62997 7.10872 8.43299C7.39664 8.236 7.72221 8.09853 8.06571 8.0289C8.40921 7.95926 8.76351 7.9589 9.10716 8.02784C9.45081 8.09679 9.77666 8.2336 10.065 8.43L30.5 21L50.935 8.43C51.2233 8.2336 51.5492 8.09679 51.8928 8.02784C52.2365 7.9589 52.5908 7.95926 52.9343 8.0289C53.2778 8.09853 53.6034 8.236 53.8913 8.43299C54.1792 8.62997 54.4235 8.88236 54.6094 9.1749C54.7953 9.46744 54.9189 9.79404 54.9727 10.1349C55.0266 10.4758 55.0095 10.8239 54.9226 11.1581C54.8358 11.4923 54.6808 11.8057 54.4672 12.0794C54.2536 12.353 53.9858 12.5811 53.68 12.75Z" fill="#076b3a"/>
                </svg>
                
            <h3>Email Us</h3>
            <p>contact@example.com</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="info-box  mb-4">
            <svg width="27" height="27" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.3333 23.5H36.5556C36.5556 20.0375 35.1801 16.7167 32.7317 14.2683C30.2833 11.8199 26.9625 10.4444 23.5 10.4444V15.6667C25.5775 15.6667 27.57 16.492 29.039 17.961C30.508 19.43 31.3333 21.4225 31.3333 23.5ZM41.7778 23.5H47C47 10.4444 36.4772 0 23.5 0V5.22222C33.5789 5.22222 41.7778 13.395 41.7778 23.5ZM44.3889 32.6389C41.125 32.6389 37.9917 32.1167 35.0672 31.1506C34.1533 30.8633 33.135 31.0722 32.4039 31.8033L26.6594 37.5478C19.2525 33.7703 13.2297 27.7475 9.45222 20.3406L15.1967 14.5961C15.9278 13.865 16.1367 12.8467 15.8494 11.9328C14.8589 8.92492 14.3564 5.77786 14.3611 2.61111C14.3611 1.9186 14.086 1.25445 13.5963 0.764777C13.1067 0.275098 12.4425 0 11.75 0H2.61111C1.9186 0 1.25445 0.275098 0.764777 0.764777C0.275098 1.25445 0 1.9186 0 2.61111C0 14.3838 4.67667 25.6743 13.0012 33.9988C21.3257 42.3233 32.6162 47 44.3889 47C45.0814 47 45.7455 46.7249 46.2352 46.2352C46.7249 45.7455 47 45.0814 47 44.3889V35.25C47 34.5575 46.7249 33.8933 46.2352 33.4037C45.7455 32.914 45.0814 32.6389 44.3889 32.6389Z" fill="#076b3a"/>
                </svg>
                
            <h3>Call Us</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div>

      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 750px;" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col form-group">
                <p>ชื่อ-นามสกุล</p>
                <input type="text" name="name" class="form-control" id="name" placeholder="*Your Name" required>
              </div>
              <div class="col form-group">
                <p>Email</p>
                <input type="email" class="form-control" name="email" id="email" placeholder="*Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <p>Telephone</p>
              <input type="tel" class="form-control" name="subject" id="subject" placeholder="*Telephone" required>
            </div>
            <div class="form-group">
              <p>เรื่องที่ต้องการติดต่อ</p>
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <p>รายละเอียด</p>
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="form-group">
              <input type="checkbox" class="mr-2" id="accept" name="accept" value="accept">
                  <label for="accept" of="policy" class="text-pdpacontact">ฉันได้อ่านและยอมรับข้อกำหนดและเงื่อนไขที่ระบุไว้ใน
                  <a href="{{ url('/') }}" >
                 
                  <u>นโยบายความเป็นส่วนตัว</u></a>
                   </label>
                   <img src="{{ Module::asset('frontend:img/capchar (1).jpg') }}" >
            </div>
            <div class="text-center">
                <button type="submit" class="btn-submit">Send Message</button
                </div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->


  </main><!-- End #main -->
@endsection

@section('script')


@endsection
