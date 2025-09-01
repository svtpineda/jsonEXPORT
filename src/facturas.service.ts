import { Injectable } from '@nestjs/common'; 
import { PrismaService } from './prisma/prisma.service';
import * as fs from 'fs';
import * as path from 'path';

@Injectable()
export class FacturasService {
  constructor(private prisma: PrismaService) {}
 
  
  // Crear archivo JSON con múltiples registros
  async createJsonFromMultipleRecords(fa_cliente?: string): Promise<any> {
    try {
      // 1. Obtener múltiples registros
      let query = `SELECT fa_xml,fa_codigo_generacion FROM dbo.Facturas_5_2025`;
      let params = {};

      const facturas:any = await this.prisma.$queryRawUnsafe(query, params);

      if (!facturas || facturas.length === 0) {
        throw new Error('No se encontraron facturas');
      }
      for (let index = 0; index < facturas.length; index++) {
        const element = facturas[index];
        const jsonData = JSON.parse(element.fa_xml);

        
        // 3. Crear el archivo
        const fileName = `${element.fa_codigo_generacion}.json`;
        const filePath = path.join(process.cwd(), 'uploads', fileName);

        // 4. Crear directorio si no existe
        const uploadDir = path.join(process.cwd(), 'uploads');
        if (!fs.existsSync(uploadDir)) {
            fs.mkdirSync(uploadDir, { recursive: true });
        }

        // 5. Escribir archivo
        fs.writeFileSync(filePath, JSON.stringify(jsonData, null, 2), 'utf8');
      }
 
 
      return "exitoo";
    } catch (error) {
      throw new Error(`Error al crear archivo JSON: ${error.message}`);
    }
  }

}