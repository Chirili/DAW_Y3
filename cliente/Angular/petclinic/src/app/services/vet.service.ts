import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {api} from 'src/environments/environment';
import { Vet } from '../models/vet';
@Injectable({
  providedIn: 'root'
})
export class VetService {
  private url: string = api;
  constructor(private http: HttpClient) { }
  getVets(){
    return this.http.post<Vet[]>(this.url,JSON.stringify({
      accion:"ListarVets"
    }));
  }
  getVetDetails(id){
    return this.http.post<Vet>(this.url,JSON.stringify({
      accion: "ObtenerVetId",
      id: id
    }))
  }
  addVet(vet: Object){
    return this.http.post(this.url,JSON.stringify({
      accion: "AnadeVet",
      vet: vet
    }))
  }
  modVet(vet: Object){
    console.log(vet);
    return this.http.post(this.url,JSON.stringify({
      accion: "ModificaVet",
      vet: vet,
    }))
  }
  removeVet(id){
    return this.http.post<Vet[]>(this.url,JSON.stringify({
      accion: "BorraVet",
      id: id
    }));
  }
}
