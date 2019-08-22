<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<?php include 'script_choice.php'; ?>
<style>
  .h-form .form-body .h-form-label {
    height: auto !important;
  }
</style>

<body>
  <?php include 'header.php'; ?>
  <div class="container-fluid">
    <div class="col s12">
      <h4 style="text-align:center;">ร่วมทำแบบสำรวจเพียง 3 นาที สำหรับธุรกิจร้านอาหารและเครื่องดื่ม</h4>
      <h4 style="text-align:center;">ลุ้นรับของที่ระลึก!</h4><br />
      <h5 style="margin-left:20px;">โปรดเลือกเพียงคำตอบที่ตรงกับสภาพกิจการท่านมากที่สุด เพียงคำตอบเดียว</h5>
      <div class="card">

        <!-- Start Form -->
        <iframe id="iframe" name="iframe" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
        <form id="form_survey" method="POST">

          <!-- Q1. -->
          <div class="card-header">
            <h5>1. บทบาทของท่านคือ <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q1. -->
          <div class="card-body">
            <label class="container">
              <p>เจ้าของร้าน/หุ้นส่วนดำเนินกิจการร้านอยู่</p>
              <input class="One" type="checkbox" id="q1_c1" name="q1" value="เจ้าของร้าน/หุ้นส่วนดำเนินกิจการร้านอยู่" onclick="Q1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>เจ้าของร้านกำลังวางแผนจะเปิดร้าน</p>
              <input class="One" type="checkbox" id="q1_c2" name="q1" value="เจ้าของร้านกำลังวางแผนจะเปิดร้าน" onclick="Q1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>เชฟ/กุ๊ก/บาริสต้าประจำร้าน</p>
              <input class="One" type="checkbox" id="q1_c3" name="q1" value="เชฟ/กุ๊ก/บาริสต้าประจำร้าน" onclick="Q1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>พนักงานเสิร์ฟ</p>
              <input class="One" type="checkbox" id="q1_c4" name="q1" value="พนักงานเสิร์ฟ" onclick="Q1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>พนักงานประจำร้าน</p>
              <input class="One" type="checkbox" id="q1_c5" name="q1" value="พนักงานประจำร้าน" onclick="Q1()">
              <span class="checkmark"></span>
            </label>
            <label class="container controls form-inline">
              <input class="One" type="checkbox" id="q1_c6" name="q1" value="อื่นๆ (โปรดระบุ)" onclick="Q1_C6()">
              <span class="checkmark"></span>
              <span class="label">อื่นๆ (โปรดระบุ)</span>
              <input type="text" class="form-control input-small" name="txt_q1_c6" id="txt_q1_c6" style="display:none">
            </label>
          </div>
          <!-- End Q1. -->

          <!-- Q2. -->
          <div class="card-header">
            <h5>2. ประเภทอาหาร/เครื่องดื่มที่ให้บริการเป็นหลัก <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q2. -->
          <div class="card-body">
            <label class="container">
              <p>อาหารตามเมนู/ตามสั่ง</p>
              <input class="Two" type="checkbox" id="q2_c1" name="q2" value="อาหารตามเมนู/ตามสั่ง" onclick="Q2()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>อาหารแบบบุฟเฟ่ต์</p>
              <input class="Two" type="checkbox" id="q2_c2" name="q2" value="อาหารแบบบุฟเฟ่ต์" onclick="Q2()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ชา/กาแฟ</p>
              <input class="Two" type="checkbox" id="q2_c3" name="q2" value="ชา/กาแฟ" onclick="Q2()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>อาหาร/เครื่องดื่มเพื่อสุขภาพ เช่น น้ำผัก ผลไม้ สลัดผัก</p>
              <input class="Two" type="checkbox" id="q2_c4" name="q2" value="อาหาร/เครื่องดื่มเพื่อสุขภาพ" onclick="Q2()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>เบเกอรี่ ขนม ของหวาน</p>
              <input class="Two" type="checkbox" id="q2_c5" name="q2" value="เบเกอรี่ ขนม ของหวาน" onclick="Q2()">
              <span class="checkmark"></span>
            </label>
            <label class="container controls form-inline">
              <input class="Two" type="checkbox" id="q2_c6" name="q2" value="อื่นๆ (โปรดระบุ)" onclick="Q2_C6()">
              <span class="checkmark"></span>
              <span class="label">อื่นๆ (โปรดระบุ)</span>
              <input type="text" class="form-control input-small" name="txt_q2_c6" id="txt_q2_c6" style="display:none">
            </label>
          </div>
          <!-- End Q2. -->

          <!-- Q3. -->
          <div class="card-header">
            <h5>3. ทำเลที่ตั้ง <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q3. -->
          <div class="card-body">
            <div class="container">
              <p>กรุณาเลือกจังหวัด</p>
              <div class="col-md-5">
                <div class="form-group">
                  <!-- แสดงตัวเลือก จังหวัด -->
                  <select class="form-control select2-single" id="province" name="q3_province">
                    <option id="province_list"> -- กรุณาเลือกจังหวัด --</option>
                  </select>
                </div>
              </div>

              <p>กรุณาเลือกอำเภอ</p>
              <div class="col-md-5">
                <div class="form-group">
                  <!-- แสดงตัวเลือก อำเภอ -->
                  <select class="form-control select2-single" id="amphur" name="q3_amphur">
                    <option id="amphur_list"> -- กรุณาเลือกอำเภอ --</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <!-- End Q3. -->

          <!-- Q4. -->
          <div class="card-header">
            <h5>4. สถานที่ <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q4. -->
          <div class="card-body">
            <label class="container">
              <p>ในห้างสรรพสินค้า/ศูนย์การค้า/คอมมูนิตี้มอลล์/ช้อปปิ้งมอลล์</p>
              <input class="Four" type="checkbox" id="q4_c1" name="q4" value="ในห้างสรรพสินค้า/ศูนย์การค้า/คอมมูนิตี้มอลล์/ช้อปปิ้งมอลล์" onclick="Q4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>พื้นที่เช่าในอาคาร หรือใกล้อาคารสำนักงาน</p>
              <input class="Four" type="checkbox" id="q4_c2" name="q4" value="พื้นที่เช่าในอาคาร หรือใกล้อาคารสำนักงาน" onclick="Q4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ร้านตั้งอยู่ในแหล่งท่องเที่ยว</p>
              <input class="Four" type="checkbox" id="q4_c3" name="q4" value="ร้านตั้งอยู่ในแหล่งท่องเที่ยว" onclick="Q4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>พื้นที่เช่าในตลาดนัด</p>
              <input class="Four" type="checkbox" id="q4_c4" name="q4" value="พื้นที่เช่าในตลาดนัด" onclick="Q4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>มีพื้นที่/หน้าร้าน/อาคารของตนเอง</p>
              <input class="Four" type="checkbox" id="q4_c5" name="q4" value="มีพื้นที่/หน้าร้าน/อาคารของตนเอง" onclick="Q4()">
              <span class="checkmark"></span>
            </label>
            <label class="container controls form-inline">
              <input class="Four" type="checkbox" id="q4_c6" name="q4" value="อื่นๆ (โปรดระบุ)" onclick="Q4_C6()">
              <span class="checkmark"></span>
              <span class="label">อื่นๆ (โปรดระบุ)</span>
              <input type="text" class="form-control input-small" name="txt_q4_c6" id="txt_q4_c6" style="display:none">
            </label>
          </div>
          <!-- End Q4. -->

          <!-- Q5. -->
          <div class="card-header">
            <h5>5. ประเภทอาชีพของลูกค้าที่มาใช้บริการมากที่สุด (เลือกได้ 2 คำตอบ) <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q5. -->
          <div class="card-body">
            <label class="container">
              <p>เจ้าของกิจการ/ผู้บริหาร</p>
              <input class="moreTwo" type="checkbox" id="q5_c1" name="q5[]" onClick="just2_q5();" value="เจ้าของกิจการ/ผู้บริหาร">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>พนักงานออฟฟิศ</p>
              <input class="moreTwo" type="checkbox" id="q5_c2" name="q5[]" onClick="just2_q5();" value="พนักงานออฟฟิศ">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ชาวต่างชาติที่ทำงานในไทย</p>
              <input class="moreTwo" type="checkbox" id="q5_c3" name="q5[]" onClick="just2_q5();" value="ชาวต่างชาติที่ทำงานในไทย">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>นักท่องเที่ยวชาวต่างชาติ</p>
              <input class="moreTwo" type="checkbox" id="q5_c4" name="q5[]" onClick="just2_q5();" value="นักท่องเที่ยวชาวต่างชาติ">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>นักเรียน/นิสิต-นักศึกษา</p>
              <input class="moreTwo" type="checkbox" id="q5_c5" name="q5[]" onClick="just2_q5();" value="นักเรียน/นิสิต-นักศึกษา">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ไม่สามารถแยกประเภทลูกค้า เนื่องจากยังไม่เคยเก็บข้อมูล</p>
              <input class="moreTwo" type="checkbox" id="q5_c6" name="q5[]" onClick="just2_q5();" value="ไม่สามารถแยกประเภทลูกค้า เนื่องจากยังไม่เคยเก็บข้อมูล">
              <span class="checkmark"></span>
            </label>

          </div>
          <!-- End Q5. -->

          <!-- Q6. -->
          <div class="card-header">
            <h5>6. ลูกค้าจ่ายค่าบริการโดยวิธีใดบ่อยที่สุด <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q6. -->
          <div class="card-body">
            <label class="container">
              <p>เงินสด</p>
              <input class="Six" type="checkbox" id="q6_c1" name="q6" onClick="Q6();" value="เงินสด">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>โอนเงินผ่านมือถือ/อินเทอร์เน็ตแบงค์กิ้ง/พร้อมเพย์</p>
              <input class="Six" type="checkbox" id="q6_c2" name="q6" onClick="Q6();" value="โอนเงินผ่านมือถือ/อินเทอร์เน็ตแบงค์กิ้ง/พร้อมเพย์">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>บัตรเครดิตธนาคาร</p>
              <input class="Six" type="checkbox" id="q6_c3" name="q6" onClick="Q6();" value="บัตรเครดิตธนาคาร">
              <span class="checkmark"></span>
            </label>
            <label class="container controls form-inline">
              <input class="Six" type="checkbox" id="q6_c4" name="q6" value="ตัดเครดิตเติมเงินกับแอปพลิเคชันของทางร้านเอง" onclick="Q6_C4()">
              <span class="checkmark"></span>
              <span class="label">ตัดเครดิตเติมเงินกับแอปพลิเคชันของทางร้านเอง (โปรดระบุชื่อแอปพลิเคชัน)</spanab>
                <input type="text" class="form-control input-small" name="txt_q6_c4" id="txt_q6_c4" style="display:none">
            </label>

          </div>
          <!-- End Q6. -->

          <!-- Q7. -->
          <div class="card-header">
            <h5>7. วิธีโปรโมทร้านที่ท่านใช้บ่อยที่สุด (เลือกได้ 2 คำตอบ) <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q7. -->
          <div class="card-body">
            <label class="container">
              <p>โพสต์บนเพจเฟซบุ๊ก</p>
              <input class="moreTwo" type="checkbox" id="q7_c1" name="q7[]" onClick="just2_q7();" value="โพสต์บนเพจเฟซบุ๊ก">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ส่งข้อความทางไลน์</p>
              <input class="moreTwo" type="checkbox" id="q7_c2" name="q7[]" onClick="just2_q7();" value="ส่งข้อความทางไลน์">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ใช้บริการไลน์แอด</p>
              <input class="moreTwo" type="checkbox" id="q7_c3" name="q7[]" onClick="just2_q7();" value="ใช้บริการไลน์แอด">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>โทรหาลูกค้าโดยตรง</p>
              <input class="moreTwo" type="checkbox" id="q7_c4" name="q7[]" onClick="just2_q7();" value="โทรหาลูกค้าโดยตรง">
              <span class="checkmark"></span>
            </label>
            <label class="container controls form-inline">
              <input class="moreTwo" type="checkbox" id="q7_c5" name="q7[]" value="ส่งข้อความ/ทำการตลาดผ่านแอปพลิเคชัน" onClick="just2_q7();">
              <span class="checkmark"></span>
              <span class="label">ส่งข้อความ/ทำการตลาดผ่านแอปพลิเคชัน (โปรดระบุชื่อแอปพลิเคชัน)</span>
              <input type="text" class="form-control input-small" name="txt_q7_c5" id="txt_q7_c5" style="display:none">
            </label>
            <label class="container controls form-inline">
              <input class="moreTwo" type="checkbox" id="q7_c6" name="q7[]" value="ใช้สื่อโฆษณา" onClick="just2_q7();">
              <span class="checkmark"></span>
              <span class="label">ใช้สื่อโฆษณา (โปรดระบุประเภทสื่อ หรือชื่อสื่อที่ใช้)</span>
              <input type="text" class="form-control input-small" name="txt_q7_c6" id="txt_q7_c6" style="display:none">
            </label>

          </div>
          <!-- End Q7. -->

          <!-- Q8. -->
          <div class="card-header">
            <h5>8. ลูกค้าส่วนใหญ่ของท่านมาใช้บริการโดย (เลือกได้ 2 คำตอบ) <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q8. -->
          <div class="card-body">
            <label class="container">
              <p>นัดหมายล่วงหน้า</p>
              <input class="moreTwo" type="checkbox" id="q8_c1" name="q8[]" onClick="just2_q8();" value="นัดหมายล่วงหน้า">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>วอล์คอิน/เข้าร้านมาโดยไม่ได้นัดหมายก่อน</p>
              <input class="moreTwo" type="checkbox" id="q8_c2" name="q8[]" onClick="just2_q8();" value="วอล์คอิน/เข้าร้านมาโดยไม่ได้นัดหมายก่อน">
              <span class="checkmark"></span>
            </label>
            <label class="container controls form-inline">
              <input class="moreTwo" type="checkbox" id="q8_c3" name="q8[]" value="จองคิว หรือสั่งอาหาร/เครื่องดื่มล่วงหน้าด้วยระบบทิคเก็ต หรือแอปพลิเคชัน" onClick="just2_q8();">
              <span class="checkmark"></span>
              <span class="label">จองคิว หรือสั่งอาหาร/เครื่องดื่มล่วงหน้าด้วยระบบทิคเก็ต หรือแอปพลิเคชัน (โปรดระบุชื่อระบบ/แอปพลิเคชัน)</span>
              <input type="text" class="form-control input-small" name="txt_q8_c3" id="txt_q8_c3" style="display:none">
            </label>
            <label class="container">
              <p>ไม่รับประทานที่ร้าน ให้ทางร้านจัดส่งให้ถึงที่</p>
              <input class="moreTwo" type="checkbox" id="q8_c4" name="q8[]" onClick="just2_q8();" value="ไม่รับประทานที่ร้าน ให้ทางร้านจัดส่งให้ถึงที่">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ไม่รับประทานที่ร้าน แต่ใช้บริการสั่งซื้ออาหารผ่านแมสเซนเจอร์</p>
              <input class="moreTwo" type="checkbox" id="q8_c5" name="q8[]" onClick="just2_q8();" value="ไม่รับประทานที่ร้าน แต่ใช้บริการสั่งซื้ออาหารผ่านแมสเซนเจอร์">
              <span class="checkmark"></span>
            </label>
            <label class="container controls form-inline">
              <input class="moreTwo" type="checkbox" id="q8_c6" name="q8[]" onClick="just2_q8();" value="อื่นๆ (โปรดระบุ)">
              <span class="checkmark"></span>
              <span class="label">อื่นๆ (โปรดระบุ)</span>
              <input type="text" class="form-control input-small" name="txt_q8_c6" id="txt_q8_c6" style="display:none">
            </label>
          </div>
          <!-- End Q8. -->

          <!-- Q9. -->
          <div class="card-header">
            <h5>9. เหตุผลที่ลูกค้ากลับมาใช้บริการบ่อยๆ ที่ร้านของท่านคือ (เลือกได้ 2 คำตอบ) <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q9. -->
          <div class="card-body">
            <label class="container">
              <p>เดินทางสะดวก อยู่ใกล้สถานที่ของลูกค้า หรือ ใกล้สถานีรถไฟฟ้า ป้ายรถเมล์</p>
              <input class="moreTwo" type="checkbox" id="q9_c1" name="q9[]" onClick="just2_q9();" value="เดินทางสะดวก อยู่ใกล้สถานที่ของลูกค้า หรือ ใกล้สถานีรถไฟฟ้า ป้ายรถเมล์">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>มีที่จอดรถ</p>
              <input class="moreTwo" type="checkbox" id="q9_c2" name="q9[]" onClick="just2_q9();" value="มีที่จอดรถ">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ร้านมีการตกแต่งสวยงาม มีบรรยากาศดี</p>
              <input class="moreTwo" type="checkbox" id="q9_c3" name="q9[]" onClick="just2_q9();" value="ร้านมีการตกแต่งสวยงาม มีบรรยากาศดี">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ราคาถูก/สมเหตุสมผล</p>
              <input class="moreTwo" type="checkbox" id="q9_c4" name="q9[]" onClick="just2_q9();" value="ราคาถูก/สมเหตุสมผล">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>มีการบริการดี รวดเร็ว</p>
              <input class="moreTwo" type="checkbox" id="q9_c5" name="q9[]" onClick="just2_q9();" value="มีการบริการดี รวดเร็ว">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>เป็นร้านเดียวที่มีบริการอาหาร/เครื่องดื่มประเภทนี้ในย่านนั้น</p>
              <input class="moreTwo" type="checkbox" id="q9_c6" name="q9[]" onClick="just2_q9();" value="เป็นร้านเดียวที่มีบริการอาหาร/เครื่องดื่มประเภทนี้ในย่านนั้น">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>รสชาติดี</p>
              <input class="moreTwo" type="checkbox" id="q9_c7" name="q9[]" onClick="just2_q9();" value="รสชาติดี">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>มีโปรโมชั่นบ่อย เช่น ลดราคา/แถมฟรี</p>
              <input class="moreTwo" type="checkbox" id="q9_c8" name="q9[]" onClick="just2_q9();" value="มีโปรโมชั่นบ่อย เช่น ลดราคา/แถมฟรี">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>มีระบบสะสมแต้ม เพื่อเรียกลูกค้าให้กลับมาใช้บริการเสมอ</p>
              <input class="moreTwo" type="checkbox" id="q9_c9" name="q9[]" onClick="just2_q9();" value="มีระบบสะสมแต้ม เพื่อเรียกลูกค้าให้กลับมาใช้บริการเสมอ">
              <span class="checkmark"></span>
            </label>

          </div>
          <!-- End Q9. -->

          <!-- Q10. -->
          <div class="card-header">
            <h5>10. หากมีแอปพลิเคชันให้ใช้เพื่อรักษาฐานลูกค้าเดิมและเพิ่มลูกค้าใหม่ ท่านต้องการเก็บข้อมูลใดมากที่สุด (เลือกได้มากกว่า 1 ข้อ) <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q10. -->
          <div class="card-body">
            <label class="container">
              <p>ชื่อ-สกุล เพศ วันเกิด เบอร์โทร อีเมล ที่อยู่</p>
              <input class="moreOne" type="checkbox" id="q10_c1" name="q10[]" value="ชื่อ-สกุล เพศ วันเกิด เบอร์โทร อีเมล ที่อยู่">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>เชื้อชาติ</p>
              <input class="moreOne" type="checkbox" id="q10_c2" name="q10[]" value="เชื้อชาติ">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ระดับการศึกษา</p>
              <input class="moreOne" type="checkbox" id="q10_c3" name="q10[]" value="ระดับการศึกษา">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>อาชีพ รายได้</p>
              <input class="moreOne" type="checkbox" id="q10_c4" name="q10[]" value="อาชีพ รายได้">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ยอดการใช้จ่ายต่อครั้ง</p>
              <input class="moreOne" type="checkbox" id="q10_c5" name="q10[]" value="ยอดการใช้จ่ายต่อครั้ง">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>เมนูที่ลูกค้ามักสั่งบ่อยๆ</p>
              <input class="moreOne" type="checkbox" id="q10_c6" name="q10[]" value="เมนูที่ลูกค้ามักสั่งบ่อยๆ">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>โปรโมชั่นใดที่เคยมีออกไป ทำยอดขายมากที่สุด</p>
              <input class="moreOne" type="checkbox" id="q10_c7" name="q10[]" value="โปรโมชั่นใดที่เคยมีออกไป ทำยอดขายมากที่สุด">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>วันที่ใด หรือช่วงใดของวัน ที่มีลูกค้าใช้บริการมากที่สุด</p>
              <input class="moreOne" type="checkbox" id="q10_c8" name="q10[]" value="วันที่ใด หรือช่วงใดของวัน ที่มีลูกค้าใช้บริการมากที่สุด">
              <span class="checkmark"></span>
            </label>
          </div>
          <!-- End Q10. -->

          <!-- Q11  -->
          <div class="card-header">
            <h5>ขอบพระคุณที่สละเวลาทำแบบสำรวจนี้ เพื่อทดลองใช้แอปพลิเคชัน Loga ฟรี! เพื่อขยายฐานลูกค้าใหม่ รักษาฐานลูกค้าเดิม และเพิ่มยอดขาย<br />โปรดกรอกอีเมล/เบอร์โทรติดต่อ <span class="required" style="color:red;">*</span></h5>
          </div>

          <div class="card-body">
            <div class="row" style="">
              <div class="col" style="font-size:20px;">
                <div class="col-sm-6">
                  <div class="input-group mx-sm-5 mb-3">
                    <div class="input-group-prepend">
                      <span style="width: 80px;" class="input-group-text" id="inputGroup-sizing-default">อีเมล</span>
                    </div>
                    <input class="form-control" id="email" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="example@example.com" type="email" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" title="กรุณาตรวจสอบรูปแบบ E-mail" required />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group mx-sm-5 mb-3">
                    <div class="input-group-prepend">
                      <span style="width: 80px;" class="input-group-text" id="inputGroup-sizing-default">โทรศัพท์</span>
                    </div>
                    <input type="tel" class="form-control" id="telephone" name="telephone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="xxxxxxxxxx" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Q11  -->


          <!-- Button submit -->
          <div class="card-body">
            <div class="form-action" style="text-align:center;">
              <button class="btn btn-outline-success" type="submit" name="submit" value="submit">ส่งแบบสอบถาม</button>
            </div>
          </div>

        </form>
        <!-- End form -->

      </div>
    </div>
  </div><br />
  <!-- End container-fluid -->

  <?php include 'footer.php'; ?>

  <!-- script submit -->
  <script>
    $("#form_survey").on("submit", function(e) {

      e.preventDefault();
      
      $.ajax({
        url: "checksubmit.php",
        type: "post",
        data: $(this).serialize(),
        success: function(result) {
          jQuery("#form_survey input[type=checkbox]").prop("checked", false);
          console.log("result= " + result);
          if (result == "1") {
            swal({
              position: 'center',
              type: 'success',
              title: 'บันทึกข้อมูลเรียบร้อย',
              showConfirmButton: true,
            }).then((result) => {
              if (result.value) {
                window.location = "thankyou.php";
              }
            });
          } else {
            swal({
              position: 'center',
              type: 'warning',
              title: 'กรุณาใส่คำตอบให้ครบ',
              showConfirmButton: true,
            });
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          swal(
            'เกิดข้อผิดพลาด!',
            'ลองอีกครั้ง!',
            'error'
          );
        }
      });

    });
  </script>
  <!-- end script submit -->

</body>

</html>