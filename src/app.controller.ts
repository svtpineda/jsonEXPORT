import { Controller, Get } from '@nestjs/common';
import { AppService } from './app.service';
import { FacturasService } from './facturas.service';

@Controller()
export class AppController {
  constructor(
    private readonly appService: AppService,
    private readonly facservice: FacturasService,
  ) {}

  @Get("generar-json")
  getHello(): any {
    return this.facservice.createJsonFromMultipleRecords();
  }
}
