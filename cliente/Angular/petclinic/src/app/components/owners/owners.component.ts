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

  constructor(private ownerser: OwnerService) { }

  ngOnInit(): void {
    this.ownerser.getOwners().subscribe(data=>{
      this.owners = <Owner[]> data;
    })
  }

}
