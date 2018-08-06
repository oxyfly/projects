import {Injectable} from '@angular/core';
import {HttpClient} from '@angular/common/http';

@Injectable()

export class AppService {

  public baseUrl = 'http://localhost:8585';
  constructor(private http: HttpClient) {}

  getAlbums() {
    return this.http.get(`${this.baseUrl}/api/albums`);
  }
}
