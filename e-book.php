<style>
  .hover-img {
    background-color: #000;
    color: #fff;
    display: inline-block;
    margin: 8px;
    max-width: 100%;
    min-width: 50vh;
    overflow: hidden;
    position: relative;
    text-align: center;
    width: 100%;
  }

  .hover-img * {
    box-sizing: border-box;
    transition: all 0.45s ease;
  }

  .hover-img:before,
  .hover-img:after {
    background-color: rgba(0, 0, 0, 0.5);
    border-top: 32px solid rgba(0, 0, 0, 0.5);
    border-bottom: 32px solid rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: '';
    transition: all 0.3s ease;
    z-index: 1;
    opacity: 0;
    transform: scaleY(2);
  }

  .hover-img img {
    vertical-align: top;
    max-width: 100%;
    backface-visibility: hidden;
  }

  .hover-img figcaption {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    align-items: center;
    z-index: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    line-height: 1.1em;
    opacity: 0;
    z-index: 2;
    transition-delay: 0.1s;
    font-size: 24px;
    font-family: sans-serif;
    font-weight: 400;
    letter-spacing: 1px;
    text-transform: uppercase;
  }
      .hover-img figcaption a {
          display: inline-block;
          position: relative;
          text-decoration: none;
          color: #fff;
      }
      .hover-img figcaption a::after {
          content: '';
          position: absolute;
          width: 100%;
          transform: scaleX(0);
          height: 2px;
          bottom: 0;
          left: 0;
          background-color: #ff412 col-lg-655;
          transform-origin: bottom right;
          transition: transform 0.25s ease-out;
          color: #ff4655 !important;
      }
      .hover-img figcaption a:hover::after {
          color: #ff4655 !important;
          transform: scaleX(1);
          transform-origin: bottom left;
      }

  .hover-img:hover:before,
  .hover-img:hover:after {
    transform: scale(1);
    opacity: 0.5;
  }

  .hover-img:hover > img {
    opacity: 0.9;
  }

  .hover-img:hover figcaption {
    opacity: 1;
  }
</style>

<div class="row">
<div class="col-sm-12 col-lg-6">
    <figure class="hover-img">
    <img src="img/valia-zhuk-valia-zhuk-arcanebook2f-blue.png"/>
    <figcaption>
        <a href="">Lorem <br/>Ipsum</a href="">
    </figcaption>
    </figure>
</div>

<div class="col-sm-12 col-lg-6">
    <figure class="hover-img">
    <img src="img/valia-zhuk-valia-zhuk-arcanebook2f.png"/>
    <figcaption>
        <a href="">Lorem <br/>Ipsum</a href="">
    </figcaption>
    </figure>
</div>
</div>



<div class="row">
<div class="col-sm-12 col-lg-6">
    <figure class="hover-img">
    <img src="img/valia-zhuk-valia-zhuk-arcanebook2f-green.png"/>
    <figcaption>
        <a href="">Lorem <br/>Ipsum</a href="">
    </figcaption>
    </figure>
</div>

<div class="col-sm-12 col-lg-6">
    <figure class="hover-img">
    <img src="img/valia-zhuk-valia-zhuk-arcanebook2f-white.png"/>
    <figcaption>
        <a href="">Lorem <br/>Ipsum</a href="">
    </figcaption>
    </figure>
</div>
</div>
