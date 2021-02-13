import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {environment} from 'src/environments/environment';
@Injectable({
  providedIn: 'root'
})
export class VetService {
  private url: string = environment.API_URL;
  constructor(private http: HttpClient) { }
  getVets(){
    return this.http.post<Object[]>(this.url,JSON.stringify({
      accion:"ListarVets"
    }));
  }
  getVetDetails(id){
    return this.http.post<Object>(this.url,JSON.stringify({
      accion: "ObtenerVetId",
      id: id
    }))
  }
  removeVet(id){
    return this.http.post(this.url,JSON.stringify({
      accion: "BorraVet",
      id: id
    }))
  }
}
