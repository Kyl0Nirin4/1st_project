<?php include("nav.php")?>
<style>
  * {
  margin: 0;
  padding: 0;
  cursor: pointer;
}
body {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
.line {
  width: 100vw;
}
.left, .right {
  width: 50vw;
  overflow: hidden;
  display: inline-block;
}
.left {
  color:pink;
  transform: skew(0deg, -15deg);
}
.right {
  color: black;
  transform: skew(0deg, 15deg);
}
.left .content {
  width: 100vw;
  text-align: center;
}
.right .content {
  width: 100vw;
  text-align: center;
  transform: translate(-50vw);
}
span {
  display: inline-block;
  font-family: 'Montserrat', sans-serif;
  font-size: 10vw;
  text-transform: uppercase;
  line-height: .8;
  transition: ease-out .6s;
}
</style>





<div class="wrap">
    <div class="line">
      <div class="left">
        <div class="content">
          <span class="spanSlow">Aladdin</span>
        </div>
      </div><!--
      --><div class="right">
        <div class="content">
          <span class="spanSlow">Aladdin</span>
        </div>
      </div>
    </div>
    <div class="line">
      <div class="left">
        <div class="content">
          <span class="spanSlow">What do</span>
        </div>
      </div><!--
      --><div class="right">
        <div class="content">
          <span class="spanSlow">what do</span>
        </div>
      </div>
      </div>
      <div class="line">
          <div class="left">
            <div class="content">
              <span class="spanFast">you</span>
            </div>
          </div><!--
          --><div class="right">
            <div class="content">
              <span class="spanFast">you</span>
            </div>
          </div>
        </div>
        <div class="line">
            <div class="left">
              <div class="content">
                <span class="spanSlow">want</span>
              </div>
            </div><!--
            --><div class="right">
              <div class="content">
                <span class="spanSlow">want</span>
              </div>
            </div>
          </div>
</div>

<script src="script.js"></script>

