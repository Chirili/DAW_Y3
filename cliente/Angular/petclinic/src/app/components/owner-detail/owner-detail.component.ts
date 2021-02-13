import { Component, OnInit } from '@angular/core';
import {Router,ActivatedRoute} from '@angular/router';
import { Owner } from '../../models/owner';
import { OwnerService } from '../../services/owner.service';
import {Location} from '@angular/common';
@Component({
  selector: 'app-owner-detail',
  templateUrl: './owner-detail.component.html',
  styleUrls: ['./owner-detail.component.scss']
})
export class OwnerDetailComponent implements OnInit {

  public owner: Owner;

  constructor(private activeroute: ActivatedRoute, private ownerService: OwnerService, private location: Location) { }
  previousPage(event){
    event.preventDefault();
    this.location.back();
  }
  ngOnInit(): void {
    this.ownerService.getOwnerDetails(this.activeroute.snapshot.paramMap.get("id")).subscribe(data =>{
      this.owner = <Owner> data;
      console.log(this.owner);
    })
  }

}
