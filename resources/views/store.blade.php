@extends('app.app')

@section('title')
    Ranklist - 7Togk'Store
@endsection
@section('rank')
    active
@endsection
@section('content')
@include('app.header.header')
<main class="page pricing-table-page">
    <section class="clean-block clean-pricing dark">
        <div class="modal fade" id="snk1" tabindex="-1" role="dialog" aria-labelledby="snk1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-info" id="exampleModalLongTitle">
                    <p class="text-center">Syarat Dan Ketentuan NEWBIE</p></h4>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>
                <div class="modal-body text-center">
                    <h4>WARNING</h4>
                        <p><?php 
                        $uh = "- Ranks Ada Jika Server Ada!\n - Gunakan Fitur Ranks Dengan Wajar\nDan Patuhi Aturan Server Jika Terkena Banned\nAdmin Tidak Bertanggung Jawab!\n - Jika Sudah Membeli Ranks\nTidak Ada Jaminan Uang Kembali!\n - Jika Ganti Nama/Akun = (Ranks Hangus)\n - Tidak Bisa Memindahkan Ranks\nDari Akun Ke Akun\n - Seiring Berjalannya Waktu\nFitur Ranks Bakal Berubah\n - Setiap Season Fitur Ranks\nAkan Berubah\n\n§e@7TogkStore";

                        echo str_replace(["\n", "§l", "§c", "§r", "§c", "§6", "§e"], ["<br/>", "", "", "", "", "", ""], $uh);
                    ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a class="btn btn-primary" href="#">saya mengerti</a>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="snk2" tabindex="-1" role="dialog" aria-labelledby="snk2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-info" id="exampleModalLongTitle">
                    <p class="text-center">Syarat Dan Ketentuan VIP</p></h4>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>
                <div class="modal-body text-center">
                    <h4>WARNING</h4>
                        <p><?php 
                        $uh = "- Ranks Ada Jika Server Ada!\n - Gunakan Fitur Ranks Dengan Wajar\nDan Patuhi Aturan Server Jika Terkena Banned\nAdmin Tidak Bertanggung Jawab!\n - Jika Sudah Membeli Ranks\nTidak Ada Jaminan Uang Kembali!\n - Jika Ganti Nama/Akun = (Ranks Hangus)\n - Tidak Bisa Memindahkan Ranks\nDari Akun Ke Akun\n - Seiring Berjalannya Waktu\nFitur Ranks Bakal Berubah\n - Setiap Season Fitur Ranks\nAkan Berubah\n\n§e@7TogkStore";

                        echo str_replace(["\n", "§l", "§c", "§r", "§c", "§6", "§e"], ["<br/>", "", "", "", "", "", ""], $uh);
                    ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a class="btn btn-primary" href="#">saya mengerti</a>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="snk3" tabindex="-1" role="dialog" aria-labelledby="snk3" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-info" id="exampleModalLongTitle">
                    <p class="text-center">Syarat Dan Ketentuan VVIP</p></h4>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>
                <div class="modal-body text-center">
                    <h4>WARNING</h4>
                        <p><?php 
                        $uh = "- Ranks Ada Jika Server Ada!\n - Gunakan Fitur Ranks Dengan Wajar\nDan Patuhi Aturan Server Jika Terkena Banned\nAdmin Tidak Bertanggung Jawab!\n - Jika Sudah Membeli Ranks\nTidak Ada Jaminan Uang Kembali!\n - Jika Ganti Nama/Akun = (Ranks Hangus)\n - Tidak Bisa Memindahkan Ranks\nDari Akun Ke Akun\n - Seiring Berjalannya Waktu\nFitur Ranks Bakal Berubah\n - Setiap Season Fitur Ranks\nAkan Berubah\n\n§e@7TogkStore";

                        echo str_replace(["\n", "§l", "§c", "§r", "§c", "§6", "§e"], ["<br/>", "", "", "", "", "", ""], $uh);
                    ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a class="btn btn-primary" href="#">saya mengerti</a>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="mbs" tabindex="-1" role="dialog" aria-labelledby="mbs" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-info" id="exampleModalLongTitle">
                    <p class="text-center">Syarat Dan Ketentuan MEMBERSHIP</p></h4>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>
                <div class="modal-body text-center">
                    <h4>WARNING</h4>
                        <p><?php 
                        $uh = "- Ranks Ada Jika Server Ada!\n - Gunakan Fitur Ranks Dengan Wajar\nDan Patuhi Aturan Server Jika Terkena Banned\nAdmin Tidak Bertanggung Jawab!\n - Jika Sudah Membeli Ranks\nTidak Ada Jaminan Uang Kembali!\n - Jika Ganti Nama/Akun = (Ranks Hangus)\n - Tidak Bisa Memindahkan Ranks\nDari Akun Ke Akun\n - Seiring Berjalannya Waktu\nFitur Ranks Bakal Berubah\n - Setiap Season Fitur Ranks\nAkan Berubah\n\n§e@7TogkStore";

                        echo str_replace(["\n", "§l", "§c", "§r", "§c", "§6", "§e"], ["<br/>", "", "", "", "", "", ""], $uh);
                    ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a class="btn btn-primary" href="#">saya mengerti</a>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="fitur1" tabindex="-1" role="dialog" aria-labelledby="fitur1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-info" id="exampleModalLongTitle">
                    <p class="text-center">NEWBIE</p></h4>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>
                <div class="modal-body text-center">
                    <h4>Fitur Rank</h4>
                        <p><?php 
                        $uh = "Wings:\n- CloudAngel\n\nFitur:\n- [/gchat] Global Chat\n- [/heal] Nambah Darah\n- [/feed] Nambah Kenyang\n- [/fly] Terbang\n- [/vision] Night Vision\n\n@7TogkStore";

                        echo str_replace(["\n", "§l", "§c", "§r", "§c", "§6", "§e"], ["<br/>", "", "", "", "", "", ""], $uh);
                    ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="fitur2" tabindex="-1" role="dialog" aria-labelledby="fitur2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-info" id="exampleModalLongTitle">
                    <p class="text-center">VIP</p></h4>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>
                <div class="modal-body text-center">
                    <h4>Fitur Rank</h4>
                        <p><?php 
                        $uh = "Wings:\n- CloudAngel\n- Davinci\n\nFitur:\n- [/gchat] Global Chat\n- [/heal] Nambah Darah\n- [/feed] Nambah Kenyang\n- [/fly] Terbang\n- [/vanish] Menghilang\n- [/setwarp] Set Pcc Tp\n- [/clanui] Buat Clan\n- [/timeset] Atur Waktu\n- [/vision] Night Vision\n\n@7TogkStore";

                        echo str_replace(["\n", "§l", "§c", "§r", "§c", "§6", "§e"], ["<br/>", "", "", "", "", "", ""], $uh);
                    ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="fitur3" tabindex="-1" role="dialog" aria-labelledby="fitur3" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-info" id="exampleModalLongTitle">
                    <p class="text-center">VVIP</p></h4>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>
                <div class="modal-body text-center">
                    <h4>Fitur Rank</h4>
                        <p><?php 
                        $uh = "Wings:\n- CloudAngel\n- Davinci\n- Devil\n- Butterfly\n\nFitur:\n- [/gchat] Global Chat\n- [/heal] Nambah Darah\n- [/feed] Nambah Kenyang\n- [/fly] Terbang\n- [/vanish] Menghilang\n- [/setwarp] Set Pcc Tp\n- [/clanui] Buat Clan\n- [/timeset] Atur Waktu\n- [/tpto | /tpme] Teleport\n- [/nickui] Ganti Nama\n- [/sizeui] Ganti Ukuran\n- [/repair] Perbaiki Item\n- [/vision] Night Vision\n- ByPass Spam Chat\n\n@7TogkStore";

                        echo str_replace(["\n", "§l", "§c", "§r", "§c", "§6", "§e"], ["<br/>", "", "", "", "", "", ""], $uh);
                    ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="fmbs" tabindex="-1" role="dialog" aria-labelledby="fmbs" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-info" id="exampleModalLongTitle">
                    <p class="text-center">MEMBERSHIP</p></h4>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>
                <div class="modal-body text-center">
                    <h4>Fitur Rank</h4>
                        <p><?php 
                        $uh = "Fitur:\n- [/gchat] Global Chat\n- [/heal] Nambah Darah\n- [/feed] Nambah Kenyang\n- [/fly] Terbang\n- [/vanish] Menghilang\n- [/setwarp] Set Pcc Tp\n- [/clanui] Buat Clan\n- [/timeset] Atur Waktu\n\n@7TogkStore";

                        echo str_replace(["\n", "§l", "§c", "§r", "§c", "§6", "§e"], ["<br/>", "", "", "", "", "", ""], $uh);
                    ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Langganan</h2>
                <div class="card"></div>
                <div class="card"><img class="card-img w-100 d-block">
                </div>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body clean-pricing-item">
                            <div class="ribbon2"><span>RECOMENDED</span></div>
                            <h3 class="card-title">[ MEMBERSHIP ]</h3>
                            <b>Unlocked: <p>Flying, Create Clans</p></b>
                            <a class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#fitur1">FITUR</a></br>
                            <b>Duration: <p>30 Days</p></b>
                            <b>S&K: <p>Berlaku</p></b>
                            </div><div class="price">
                                <h4>Rp 28.000 / Month</h4>
                                <a href="#" class="btn btn-primary btn-block"  data-toggle="modal" data-target="#mbs">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="block-heading">
                <h2 class="text-info">Packet Ranks</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 col-lg-4">
                    <div class="clean-pricing-item" data-toggle="modal" data-target="#snk">
                        <div class="heading">
                            <h3><div>[ NEWBIE ]</div></h3>
                        </div>
                        <div class="features">
                            <h4><span class="feature">Unlocked:&nbsp;</span><span>Flying, Night Vision</h4>
                            <h4><a class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#fitur1">Fitur-Rank</a></h4>
                            {{-- <h4><span class="feature"></span></h4> --}}
                            <h4><span class="feature">Duration:&nbsp;</span><span>Permanent</span></h4>
                            <h4><span class="feature">S&K:&nbsp;</span><span>Berlaku</span></h4>
                        </div>
                        <div class="price">
                            <h4>Rp 50.000</h4>
                        </div><button class="btn btn-outline-primary btn-block"  data-toggle="modal" data-target="#snk1" type="button">BUY NOW</button></div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="clean-pricing-item">
                        <div class="heading">
                            <div class="ribbon2"><span>Best Ranks</span></div>
                            <h3>[ VIP ]</h3>
                        </div>
                        <div class="features">
                            <h4><span class="feature">Unlocked:&nbsp;</span><span>Create Clans, Create Warps</span></h4>
                            <h4><a class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#fitur2">Fitur-Rank</a></h4>
                            <h4><span class="feature">Duration:&nbsp;</span><span>Permanent</span></h4>
                            <h4><span class="feature">S&K:&nbsp;</span><span>Berlaku</span></h4>
                        </div>
                        <div class="price">
                            <h4>Rp 120.000</h4>
                        </div><button class="btn btn-primary btn-block"  data-toggle="modal" data-target="#snk2" type="button">BUY NOW</button></div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="clean-pricing-item">
                        <div class="heading">
                            <h3>[ VVIP ]</h3>
                        </div>
                        <div class="features">
                            <h4><span class="feature">Unlocked:&nbsp;</span><span>Teleport, Repair, SpamChat</span></h4>
                            <h4><a class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#fitur3">Fitur-Rank</a></h4>
                            <h4><span class="feature">Duration:&nbsp;</span><span>Permanent</span></h4>
                            <h4><span class="feature"><a>S&K</a>&nbsp;</span><span>Berlaku</span></h4>
                        </div>
                        <div class="price">
                            <h4>Rp 220.000</h4>
                        </div><button class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#snk3" type="button">BUY NOW</button></div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection