
provider "scaleway" {
  region = "par1"
}

data "scaleway_image" "packer-image" {
  architecture = "x86_64"
  name         = "Ubuntu Xenial"
}


resource "scaleway_server" "packer-image" {
  name  = "packer-image"
  image = "fdea42ff-a957-43a9-88b6-f6e076db0ac5"
  type  = "START1-S"
  state = "running"
  enable_ipv6 = true
  dynamic_ip_required = true

}

output "instance_ip" {
  value = "fdea42ff-a957-43a9-88b6-f6e076db0ac5"
}
