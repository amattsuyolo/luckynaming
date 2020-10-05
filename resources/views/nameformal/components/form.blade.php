        <h5 class=" info-color white-text text-center py-4">
          <strong>搜索吉祥美名</strong>
        </h5>
        <form action = "/naming/result" method="POST"  style="background-image:url(nametest/img/butterfly2.jpg);background-repeat: no-repeat; background-size: 100% auto;">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputEmail1">姓氏</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="請輸入姓氏" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">請選擇生肖</label>
            <select name="zodiac" class="custom-select" id="inputGroupSelect01" required>
              <option  disabled="disabled">挑選...</option>
              <option value="1">鼠</option>
              <option value="2">牛</option>
              <option value="3">虎</option>
              <option value="4">兔</option>
              <option value="5">龍</option>
              <option value="6">蛇</option>
              <option value="7">馬</option>
              <option value="8">羊</option>
              <option value="9">猴</option>
              <option value="10">雞</option>
              <option value="11">狗</option>
              <option value="12">豬</option>
            </select>
          </div>
          
          <!-- <div class="form-group">
            <label for="example-date-input" >生日</label>
            <input class="form-control" type="date" value="2011-01-01" id="example-date-input">
            <small id="emailHelp" class="form-text text-muted">請選擇西元生日</small>
          </div> -->
          <div>
            <label for="example-date-input" >性別</label>
            <div class="form-group">
            <label class="radio-inline">
                <input type="radio" name="sex" value="male" required>男
            </label>
            <label class="radio-inline">
                <input type="radio" name="sex" value="femail" required>女
            </label>
         </div>
        <div class="text-center">
          <button type="submit" style="font-size:large;" class="btn btn-info  btn-block">立即獲取</button>
        </div>
        </form>
</div>