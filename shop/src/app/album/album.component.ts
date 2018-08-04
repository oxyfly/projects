import {Component, Input, OnInit} from '@angular/core';
import {Router} from '@angular/router';

@Component({
  selector: 'app-album',
  templateUrl: './album.component.html',
  styleUrls: ['./album.component.css']
})
export class AlbumComponent implements OnInit {
  @Input() album;


  constructor(private route: Router) {
  }


  ngOnInit() {
  }

  openAlbum(id) {
    this.route.navigate(['/album/' + id]);
  }
}
