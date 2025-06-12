provider "aws" {
  region                  = var.aws_region
  access_key              = var.aws_access_key
  secret_key              = var.aws_secret_key
}

resource "aws_instance" "docucodeai_server" {
  ami           = "ami-08c40ec9ead489470" # Ubuntu 22.04 en us-east-1 (Ohio)
  instance_type = "t2.micro" # Gratis en Free Tier

  tags = {
    Name = "DocuCodeAI-Server"
  }
}
