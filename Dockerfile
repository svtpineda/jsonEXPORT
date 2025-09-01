FROM mcr.microsoft.com/mssql/server:2022-latest

# Cambiar a root para instalar paquetes
USER root

# Instalar dependencias y mssql-tools
RUN apt-get update && \
    apt-get install -y curl apt-transport-https gnupg lsb-release && \
    curl -sSL https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor | tee /etc/apt/trusted.gpg.d/microsoft.gpg > /dev/null && \
    echo "deb [arch=amd64,arm64,armhf signed-by=/etc/apt/trusted.gpg.d/microsoft.gpg] https://packages.microsoft.com/ubuntu/$(lsb_release -rs)/prod $(lsb_release -cs) main" > /etc/apt/sources.list.d/mssql-release.list && \
    apt-get update && \
    ACCEPT_EULA=Y apt-get install -y mssql-tools18 unixodbc-dev && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Agregar sqlcmd al PATH
ENV PATH="$PATH:/opt/mssql-tools18/bin"

# Volver al usuario mssql
USER mssql