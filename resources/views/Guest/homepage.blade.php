<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/homepage.css" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <title>Jarvis Travel - terbanglan bersama kami</title>
  </head>
  <body>
    <div class="container">
      <div class="container-top">
        <div class="lang">
          <h1>Jarvis Travel</h1>
        </div>
        <div class="auth">
          <button>Login</button>
          <button>Register</button>
        </div>
      </div>
      <div class="container-top-title">
        <div class="container-top-title-text">
          <h3>
            Mau healing ke seluruh indonesia atau luar negeri? <br />tenang, ada
            <span>Jarvis Travel</span>
          </h3>
          <div class="content">
            <div class="modal-choose-people">
                <div class="modal-choose-people-header">
                  <p>X</p>
                </div>
                <div class="modal-choose-people-body">
                  <table>
                    <tr>
                      <td>Dewasa</td>
                      <td>:</td>
                      <td><input type="number" name="" id=""></td>
                    </tr>
                    <tr>
                      <td>Anak anak</td>
                      <td>:</td>
                      <td><input type="number" name="" id=""></td></td>
                    </tr>
                    <tr>
                      <td>Bayi</td>
                      <td>:</td>
                      <td><input type="number" name="" id=""></td></td>
                    </tr>
                  </table>
                  <button class="done">Done</button>
                </div>
            </div>
            <div class="chose">
              <div class="btn-chose">
                <button class="jalan">Sekali jalan</button>
                <button class="multi">multikota</button>
              </div>
              <div class="choose-people">
                <div class="choose-people-pasenger">
                  <span>0</span> Dewasa, <span>0</span> Anak anak, <span>0</span> Bayi
                </div>
                <div class="choose-people-class">
                  <select name="" id="">
                    <option value="">Class</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="order">
              <div class="airport">
                <div class="airport-content">
                  <div class="from">
                    <div class="from-title">
                      <div class="modal-choose-airport dari">
                        <div class="modal-choose-airport-content">
                          <div class="modal-choose-airport-content-header">
                            <span>X</span>
                          </div>
                          <div class="modal-choose-airport-content-body">
                            <input type="text" placeholder="Cari" />
                            <hr />
                            <ul>
                              <li>1</li>
                              <li>2</li>
                              <li>3</li>
                              <li>4</li>
                              <li>5</li>
                              <li>6</li>
                              <li>7</li>
                              <li>8</li>
                              <li>9</li>
                              <li>10</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Dari</p>
                      <div class="from-content pilih">
                        <p>Supadio (PNK)</p>
                      </div>
                    </div>
                  </div>

                  <i
                    class="fa-solid fa-left-right fa-2xl"
                    style="
                      margin-top: 60px;
                      margin-left: 5px;
                      margin-right: 5px;
                    "
                  ></i>
                  <div class="to">
                    <div class="from-title">
                      <div class="modal-choose-airport tujuan">
                        <div class="modal-choose-airport-content">
                          <div class="modal-choose-airport-content-header">
                            <span>X</span>
                          </div>
                          <div class="modal-choose-airport-content-body">
                            <input type="text" placeholder="Cari" />
                            <hr />
                            <ul>
                              <li>1</li>
                              <li>2</li>
                              <li>3</li>
                              <li>4</li>
                              <li>5</li>
                              <li>6</li>
                              <li>7</li>
                              <li>8</li>
                              <li>9</li>
                              <li>10</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Ke</p>
                      <div class="to-content pilih">
                        <p>Soekarno-Hatta (CKG)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="date">
                <div class="date-go">
                  <p>Tanggal pergi</p>
                  <input type="date" />
                </div>
                <div class="date-home">
                  <div class="date-home-choose">
                    <input type="checkbox" name="pulang" id="" />
                    <p>Tanggal pulang</p>
                  </div>
                  <input type="date" name="" id="" />
                </div>
              </div>
            </div>
            <button class="search">Cari</button>
          </div>
        </div>
        <div class="container-top-title-text-image">
          <img src="../img/turis.png" alt="" />
        </div>
      </div>
    </div>
    <script src="../js/all.min.js"></script>
    <script src="../js/homepage.js"></script>
  </body>
</html>
