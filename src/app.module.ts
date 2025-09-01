import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service'; 
import { PrismaService } from './prisma/prisma.service';
import { FacturasService } from './facturas.service';

@Module({
  imports: [],
  controllers: [AppController],
  providers: [AppService,PrismaService,FacturasService],
})
export class AppModule {}
