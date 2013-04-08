<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="span12">

      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

      <div class="row">
        <div class="span9">
          <form class="form-horizontal" method="post" action="<?php echo $this->Html->url("/questionary/create/"); ?>">
            <fieldset>
              <div class="control-group">
                <label class="control-label" for="textarea">アンケートの内容</label>
                <div class="controls">
                  <textarea name="detail" class="input-xlarge" id="textarea" rows="3" placeholder="アンケートの内容を書いて下さい" style="width:530px; height:100px;"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="textarea">アンケートのタイプ<br>-複数回答-</label>
                <div class="controls">
                  <label class="radio">
                    <input type="radio" name="type" id="question_type1" value="1" checked>
                    あり
                  </label>
                  <label class="radio">
                    <input type="radio" name="type" id="question_type2" value="2">
                    なし
                  </label>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="textarea">期間</label>
                <div class="controls">
                  <select name="period">
                    <option value="1">1日</option>
                    <option value="2">2日</option>
                    <option value="3">3日</option>
                    <option value="4">4日</option>
                    <option value="5">5日</option>
                    <option value="6">6日</option>
                    <option value="7">7日</option>
                    <option value="8">8日</option>
                    <option value="9">9日</option>
                    <option value="10">10日</option>
                    <option value="11">11日</option>
                    <option value="12">12日</option>
                    <option value="13">13日</option>
                    <option value="14">14日</option>
                    <option value="15">15日</option>
                    <option value="16">16日</option>
                    <option value="17">17日</option>
                    <option value="18">18日</option>
                    <option value="19">19日</option>
                    <option value="20">20日</option>
                    <option value="21">21日</option>
                    <option value="22">22日</option>
                    <option value="23">23日</option>
                    <option value="24">24日</option>
                    <option value="25">25日</option>
                    <option value="26">26日</option>
                    <option value="27">27日</option>
                    <option value="28">28日</option>
                    <option value="29">29日</option>
                    <option value="30">30日</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="textarea">質問</label>
                <div class="controls" style="padding-bottom: 5px;">
                  <input type="text" name="question[]" class="input-xxlarge" value="" />
                </div>
                <div class="controls" style="padding-bottom: 5px;">
                  <input type="text" name="question[]" class="input-xxlarge" value="" />
                </div>
                <div class="controls" style="padding-bottom: 5px;">
                  <input type="text" name="question[]" class="input-xxlarge" value="" />
                </div>
                <div class="controls" style="padding-bottom: 5px;">
                  <input type="text" name="question[]" class="input-xxlarge" value="" />
                </div>
                <div class="controls" style="padding-bottom: 5px;">
                  <input type="text" name="question[]" class="input-xxlarge" value="" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="textarea"></label>
                <div class="controls" style="padding-bottom: 5px;">
                  <button class="btn btn-success" type="button" id="question_add">質問を追加</button>
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-primary">アンケートを開始する</button>
              </div>
            </fieldset>
          </form>
        </div><!-- /sapn9 -->
        <div class="span3">
          gdagagagfa
        </div><!-- /span3 -->
      </div><!-- /row -->
    </div><!-- /span12 -->
  </div><!-- /row -->
  <hr>
  <footer>
    <p>&copy; Company 2012</p>
  </footer>
</div> <!-- /container -->

<!-- digupにログイン modal window -->
<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">digupにログイン</h3>
  </div>
  <div class="modal-body">
    <p>
      <img src="images/facebook_login_btn.jpg" />
      <img src="images/twitter_login_btn.jpg" />
    </p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
<!-- / digupにログイン modal window -->