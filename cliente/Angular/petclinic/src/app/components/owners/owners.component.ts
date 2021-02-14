import { Component, OnInit } from '@angular/core';
import { OwnerService } from '../../services/owner.service';
import { Owner } from 'src/app/models/owner';
import { Router } from '@angular/router';

@Component({
  selector: 'app-owners',
  templateUrl: './owners.component.html',
  styleUrls: ['./owners.component.scss']
})
export class OwnersComponent implements OnInit {

  public owners: Owner[];

  constructor(private ownerService: OwnerService) { }
  removeOwner(ownerId){
    this.ownerService.retrieveOwnerPets(ownerId).subscribe(data =>{
      if(data.length > 0 ){
        if(`¿Estás seguro que deseas borrar a ${ownerId} y sus mascotas?`){
          
        }
      }
    });
    if(confirm(`¿Estás seguro que deseas borrar a ${ownerId}?`)){
      this.ownerService.deleteOwnerAndReturnList(ownerId).subscribe(data => {
        this.owners = <Owner[]> data;
      })
    }
  }
  ngOnInit(): void {
    this.ownerService.getOwners().subscribe(data=>{
      this.owners = <Owner[]> data;
    })
  }

}
