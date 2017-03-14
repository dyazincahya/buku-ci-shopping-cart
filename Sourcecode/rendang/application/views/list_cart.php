<?php if(!$this->cart->contents()):
	echo $pengguna->nama.', Keranjang belanja anda masih kosong !!!';
else:
?>
	<div class="alert alert-warning" role="alert"><b>Harga Belum Termasuk Diskon<b></div>
	<div class="row">
		<div class="col-xs-12 col-sm-12">
          <div class="table-responsive">
		  <form method="POST" action="<?php echo site_url('cart/pesanSekarang');?>">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#Jumlah</th>
                  <th>#Nama Produk</th>
                  <th>#Satuan</th>
                  <th>#Diskon</th>
                  <th>#Sub Total</th>
                </tr>
              </thead>
              	<tbody>
					<?php $i = 1; ?>
					<?php foreach($this->cart->contents() as $items): ?>
					
					<?php echo form_hidden('rowid[]', $items['rowid']); ?>
					<input type="hidden" name="IDpesanan[]" value="<?php echo rand(1,10000);?>">
					<input type="hidden" name="IDuser[]" value="<?php echo $pengguna->id_user;?>">
					<tr <?php if($i&1){ echo 'class="alt"'; }?>>
						<td>
							<input type="text" name="qty[]" readonly size="1" value="<?php echo $items['qty']; ?>" style="border:0px;background:none;">
						</td>
						
						<td><input type="text" name="produk[]" readonly value="<?php echo $items['name'];?>" style="border:0px;background:none;"></td>
						
						<td>Rp. <?php echo $this->cart->format_number($items['price']); ?>
						<input type="hidden" name="harga_satuan[]" value="<?php echo $items['price'];?>"></td>
						
						<td><?php echo $items['diskon'];?>%
						<input type="hidden" name="diskon[]" size="2" readonly value="<?php echo $items['diskon'];?>"></td>
						
						<td>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
					</tr>
					
					<?php $i++; ?>
					<?php endforeach; ?>
					
					<tr>
						<td colspan="4"><strong>Total</strong></td>
						<td>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
					</tr>
				</tbody>
            </table>
			<?php if($pengguna->nama == "" || $pengguna->email = "" || $pengguna->nohp = "" || $pengguna->alamat == ""){?>
				<button type="submit" name="submit" class="btn btn-danger" disabled><span class="glyphicon glyphicon-bookmark"></span> Deal Untuk Memesan</button>
				<hr>
				<div class="alert alert-danger" role="alert">
					<b>Maaf !!!</b> Anda Tidak Bisa Melakukan Pemesan, Dikarenakan Informasi Profil Anda Belum Lengkap. <a href="<?php echo site_url('admin/set_identitas/edit/'.$pengguna->id_user);?>"><b>(Lengkapi Informasi Profil)</b></a>
				</div>
			<?php } else { ?>
				<button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-bookmark"></span> Deal Untuk Memesan</button>
			<?php } ?>
			<?php echo anchor('cart/empty_cart', '<span class="glyphicon glyphicon-remove"></span> Kosongkan Keranjang');?>
		  </form>
          </div>
		</div>
	</div>
<?php 
endif;
?>



