import { Component, OnInit } from '@angular/core';
import { OwnerService } from 'src/app/services/owner.service';
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
    if(confirm(`¿Estás seguro que deseas borrar a ${ownerId}?`)){
      this.ownerService.deleteOwner(ownerId).subscribe(data => {
        this.owners = <Owner[]> data;
      })
    }
  }
  ngOnInit(): void {
    this.ownerService.getOwners().subscribe(data=>{
      console.log(data);
      this.owners = <Owner[]> data;
    })
  }

}
