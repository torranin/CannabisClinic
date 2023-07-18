<div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">เพิ่มข้อมูลคนไข้ใหม่</h4>
              <!-- <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div> -->
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <form class="form-horizontal">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Personal Info</h4> -->
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >ชื่อ</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname"
                          placeholder=""
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >นามสกุล</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="lname"
                          placeholder=""
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >เลขประจำตัวประชาชน</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="password"
                          class="form-control"
                          id="lname"
                          placeholder=""
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="email1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >ที่อยู่</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="email1"
                          placeholder=""
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label"></label>
                      <div class="col-md-9">
                        <select
                          class="select2 form-select shadow-none"
                          style="width: 100%; height: 36px"
                        >
                          <option>เชียงใหม่</option>
                          <optgroup label="">
                            <option value="HI">ลำพูน</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label"></label>
                      <div class="col-md-9">
                        <select
                          class="select2 form-select shadow-none"
                          style="width: 100%; height: 36px"
                        >
                          <option>แม่วาง</option>
                          <optgroup label="">
                            <option value="HI">สันป่าตอง</option>
                            <option value="HI">ดอยหล่อ</option>
                            <option value="HI">แม่แจ่ม</option>
                            <option value="HI">หางดง</option>
                            <option value="HI">จอมทอง</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label"></label>
                      <div class="col-md-9">
                        <select
                          class="select2 form-select shadow-none"
                          style="width: 100%; height: 36px"
                        >
                          <option>Select</option>
                          <optgroup label="แม่วาง">
                            <option value="AK">บ้านกาด</option>
                            <option value="HI">ดอนเปา</option>
                            <option value="HI">ทุ่งปี้</option>
                            <option value="HI">ทุ่งรวงทอง</option>
                            <option value="HI">แม่วิน</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >สิทธิการรักษา</label
                      >
                      <div class="col-sm-9">
                      <select
                          class="select2 form-select shadow-none"
                          style="width: 100%; height: 36px"
                        >
                          <option>Select</option>
                          <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                          </optgroup>
                          <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">โรคประจำตัว</label>
                    <div class="col-md-9">
                      <select
                        class="select2 form-select shadow-none mt-3"
                        multiple="multiple"
                        style="height: 36px; width: 100%"
                      >
                        <optgroup label="โรค NCDs">
                          <option value="AK">โรคเบาหวาน</option>
                          <option value="HI">โรคความดันโลหิตสูง</option>
                          <option value="CA">โรคไขมันในเลือดสูง</option>
                          <option value="CA">โรคหัวใจและหลอดเลือด</option>
                          <option value="CA">โรคถุงลมโป่งพอง</option>
                          <option value="CA">โรคมะเร็ง</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label
                      for="cono1"
                      class="col-sm-3 text-end control-label col-form-label"
                      >วัน/เดือน/ปี เกิด</label
                    >
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control mydatepicker"
                          placeholder="mm/dd/yyyy"
                        />
                        <div class="input-group-append">
                          <span class="input-group-text h-100"
                            ><i class="mdi mdi-calendar"></i
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label
                       for="cono1"
                      class="col-sm-3 text-end control-label col-form-label"
                      >ยาที่ใช้ประจำ</label
                    >
                    <div class="col-sm-9">
                      <textarea class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label
                      for="cono1"
                      class="col-sm-3 text-end control-label col-form-label"
                      >เบอร์โทรติดต่อ</label
                    >
                    <div class="col-sm-9">
                       <input
                        type="text"
                        class="form-control"
                        id="cono1"
                        placeholder=""
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">ไฟล์ที่สำคัญ...</label>
                    <div class="col-md-9">
                      <div class="custom-file">
                        <input
                          type="file"
                          class="custom-file-input"
                          id="validatedCustomFile"
                          required
                        />
                        <label
                          class="custom-file-label"
                          for="validatedCustomFile"
                          >เลือกไฟล์...</label
                        >
                      </div>
                    </div>
                  </div>
                  <div class="border-top">
                    <div class="card-body">
                      <button type="button" class="btn btn-primary">
                        บันทึก
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->